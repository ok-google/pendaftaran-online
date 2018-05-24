# Create Table Jurusan
create table jurusan(                                                              
id number(3) generated always as identity(start with 1 increment by 1) primary key,
nama varchar2(25),                                                                 
kode char(2) constraint unique_kode_jurusan unique,                                
npm char(15)                                                                       
);

#Create Table calon_mahasiswa
create table calon_mahasiswa(                                                       
id number(3) generated always as identity(start with 1 increment by 1) primary key, 
nama varchar2(30),                                                                  
tempat_lahir varchar2(25),                                                          
tgl_lahir date,                                                                     
alamat varchar2(50),                                                                
jk char(1),                                                                         
no_ktp char(16),                                                                    
no_kk char(16),                                                                     
no_telp varchar2(15),                                                               
asal varchar2(50),                                                                  
no_ijazah char(7),                                                                  
total_nilai_un number(5),                                                           
no_pendaftaran varchar(15) constraint unique_cmhs_no unique                         
);                                                                                  
                                       

#create table table_user
create table table_user(                                                           
id number(3) generated always as identity(start with 1 increment by 1) primary key,
username varchar2(15) constraint unique_user_username unique,                      
password varchar2(255),                                                            
pertanyaan varchar2(255),                                                          
jawaban varchar2(50),                                                              
email varchar2(50) constraint unique_user_email unique                             
);              

#create table dokumen
create table dokumen(                                                              
id number(3) generated always as identity(start with 1 increment by 1) primary key,
ijazah varchar2(100),                                                              
ktp varchar2(100),                                                                 
kk varchar2(100),                                                                  
rapor varchar2(100),                                                               
ipk varchar2(100),                                                                 
khs varchar2(100),                                                                 
ket_pindah varchar2(100),                                                          
ijazah_d3 varchar2(100),                                                           
transkrip varchar2(100),                                                           
bukti_transfer varchar2(100)                                                       
);                                                                                 

#create table pendaftaran(transaksi)
create table pendaftaran(                                                          
id number(3) generated always as identity(start with 1 increment by 1) primary key,
user_id number(3),                                                                 
calon_mahasiswa_id number(3),                                                      
jurusan_id number(3),                                                              
dokumen_id number(3),                                                              
no_pendaftaran varchar2(25) constraint unique_no_pendaftaran unique,               
tgl_daftar date                                                                    
);                                                                                 

#alter pendaftaran transaksi(fk)
alter table pendaftaran add constraint fk_user_id_pendaftaran
foreign key(user_id) references table_user(id);              
alter table pendaftaran add constraint fk_cmhs_id_pendaftaran  
foreign key(calon_mahasiswa_id) references calon_mahasiswa(id);
alter table pendaftaran add constraint fk_jurusan_id_pendaftaran
foreign key(jurusan_id) references jurusan(id);                 
alter table pendaftaran add constraint fk_dokumen_id_pendaftaran
foreign key(dokumen_id) references dokumen(id);                 

#create table verifikasi
create table verifikasi(                                                           
id number(3) generated always as identity(start with 1 increment by 1) primary key,
pendaftaran_id number(3),                                                          
data_cmhs char(1),                                                                 
dokumen char(1),                                                                   
transfer char(1)                                                                   
);                                                                                 

#alter verifikasi transaksi(fk)
alter table verifikasi add constraint fk_pendaftaran_id_verifikasi
foreign key(pendaftaran_id) references pendaftaran(id);           

#create table kota
create table kota_calon_mahasiswa(                                                 
id char(4) generated always as identity(start with 1 increment by 1) primary key,
nama varchar2(50)
);      

#create table kota_calon_mahasiswa
create table kota_calon_mahasiswa(                                                 
id number(3) generated always as identity(start with 1 increment by 1) primary key,
calon_mahasiswa_id number(3),                                                      
kota_id char(4)                                                                    
);      

#alter table kota_calon_mahasiswa
alter table kota_calon_mahasiswa add constraint fk_kota_cmhs__cmhs_id
foreign key(calon_mahasiswa_id) references calon_mahasiswa(id);      
alter table kota_calon_mahasiswa add constraint fk_kota_cmhs_kota_id 
foreign key(kota_id) references kota(id);                            

#Trigger
create or replace trigger delete_pendaftaran                         
before delete on calon_mahasiswa                                     
for each row                                                         
begin                                                                
delete from pendaftaran where calon_mahasiswa_id = :old.id;          
delete from kota_calon_mahasiswa where calon_mahasiswa_id = :old.id; 
end;                                                                 

create or replace trigger delete_verifikasi           
before delete on pendaftaran                          
for each row                                          
begin                                                 
delete from verifikasi where pendaftaran_id = :old.id;
end;                                                  
/                                                     
/                                                                                                                                                                                                                                                                                                                                                               