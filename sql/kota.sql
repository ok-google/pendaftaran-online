INSERT INTO kabupaten (id, nama) VALUES
with names as(
select '1101','KAB. ACEH SELATAN from dual union all
select '1102','KAB. ACEH TENGGARA from dual union all
select '1103', 'KAB. ACEH TIMUR from dual union all
select '1104', 'KAB. ACEH TENGAH from dual union all
select '1105', 'KAB. ACEH BARAT from dual union all
select '1106', 'KAB. ACEH BESAR from dual union all
select '1107', 'KAB. PIDIE from dual union all
select '1108', 'KAB. ACEH UTARA from dual union all
select '1109', 'KAB. SIMEULUE from dual union all
select '1110', 'KAB. ACEH SINGKIL from dual union all
select '1111', 'KAB. BIREUEN from dual union all
select '1112', 'KAB. ACEH BARAT DAYA from dual union all
select '1113', 'KAB. GAYO LUES from dual union all
select '1114', 'KAB. ACEH JAYA from dual union all
select '1115', 'KAB. NAGAN RAYA from dual union all
select '1116', 'KAB. ACEH TAMIANG from dual union all
select '1117', 'KAB. BENER MERIAH from dual union all
select '1118', 'KAB. PIDIE JAYA from dual union all
select '1171', 'KOTA BANDA ACEH from dual union all
select '1172', 'KOTA SABANG from dual union all
select '1173', 'KOTA LHOKSEUMAWE from dual union all
select '1174', 'KOTA LANGSA from dual union all
select '1175', 'KOTA SUBULUSSALAM from dual union all
select '1201', 'KAB. TAPANULI TENGAH from dual union all
select '1202', 'KAB. TAPANULI UTARA from dual union all
select '1203', 'KAB. TAPANULI SELATAN from dual union all
select '1204', 'KAB. NIAS from dual union all
select '1205', 'KAB. LANGKAT from dual union all
select '1206', 'KAB. KARO from dual union all
select '1207', 'KAB. DELI SERDANG from dual union all
select '1208', 'KAB. SIMALUNGUN from dual union all
select '1209', 'KAB. ASAHAN from dual union all
select '1210', 'KAB. LABUHANBATU from dual union all
select '1211', 'KAB. DAIRI from dual union all
select '1212', 'KAB. TOBA SAMOSIR from dual union all
select '1213', 'KAB. MANDAILING NATAL from dual union all
select '1214', 'KAB. NIAS SELATAN from dual union all
select '1215', 'KAB. PAKPAK BHARAT from dual union all
select '1216', 'KAB. HUMBANG HASUNDUTAN from dual union all
select '1217', 'KAB. SAMOSIR from dual union all
select '1218', 'KAB. SERDANG BEDAGAI from dual union all
select '1219', 'KAB. BATU BARA from dual union all
select '1220', 'KAB. PADANG LAWAS UTARA from dual union all
select '1221', 'KAB. PADANG LAWAS from dual union all
select '1222', 'KAB. LABUHANBATU SELATAN from dual union all
select '1223', 'KAB. LABUHANBATU UTARA from dual union all
select '1224', 'KAB. NIAS UTARA from dual union all
select '1225', 'KAB. NIAS BARAT from dual union all
select '1271', 'KOTA MEDAN from dual union all
select '1272', 'KOTA PEMATANG SIANTAR from dual union all
select '1273', 'KOTA SIBOLGA from dual union all
select '1274', 'KOTA TANJUNG BALAI from dual union all
select '1275', 'KOTA BINJAI from dual union all
select '1276', 'KOTA TEBING TINGGI from dual union all
select '1277', 'KOTA PADANGSIDIMPUAN from dual union all
select '1278', 'KOTA GUNUNGSITOLI from dual union all
select '1301', 'KAB. PESISIR SELATAN from dual union all
select '1302', 'KAB. SOLOK from dual union all
select '1303', 'KAB. SIJUNJUNG from dual union all
select '1304', 'KAB. TANAH DATAR from dual union all
select '1305', 'KAB. PADANG PARIAMAN from dual union all
select '1306', 'KAB. AGAM from dual union all
select '1307', 'KAB. LIMA PULUH KOTA from dual union all
select '1308', 'KAB. PASAMAN from dual union all
select '1309', 'KAB. KEPULAUAN MENTAWAI from dual union all
select '1310', 'KAB. DHARMASRAYA from dual union all
select '1311', 'KAB. SOLOK SELATAN from dual union all
select '1312', 'KAB. PASAMAN BARAT from dual union all
select '1371', 'KOTA PADANG from dual union all
select '1372', 'KOTA SOLOK from dual union all
select '1373', 'KOTA SAWAHLUNTO from dual union all
select '1374', 'KOTA PADANG PANJANG from dual union all
select '1375', 'KOTA BUKITTINGGI from dual union all
select '1376', 'KOTA PAYAKUMBUH from dual union all
select '1377', 'KOTA PARIAMAN from dual union all
select '1401', 'KAB. KAMPAR from dual union all
select '1402', 'KAB. INDRAGIRI HULU from dual union all
select '1403', 'KAB. BENGKALIS from dual union all
select '1404', 'KAB. INDRAGIRI HILIR from dual union all
select '1405', 'KAB. PELALAWAN from dual union all
select '1406', 'KAB. ROKAN HULU from dual union all
select '1407', 'KAB. ROKAN HILIR from dual union all
select '1408', 'KAB. SIAK from dual union all
select '1409', 'KAB. KUANTAN SINGINGI from dual union all
select '1410', 'KAB. KEPULAUAN MERANTI from dual union all
select '1471', 'KOTA PEKANBARU from dual union all
select '1472', 'KOTA DUMAI from dual union all
select '1501', 'KAB. KERINCI from dual union all
select '1502', 'KAB. MERANGIN from dual union all
select '1503', 'KAB. SAROLANGUN from dual union all
select '1504', 'KAB. BATANGHARI from dual union all
select '1505', 'KAB. MUARO JAMBI from dual union all
select '1506', 'KAB. TANJUNG JABUNG BARAT from dual union all
select '1507', 'KAB. TANJUNG JABUNG TIMUR from dual union all
select '1508', 'KAB. BUNGO from dual union all
select '1509', 'KAB. TEBO from dual union all
select '1571', 'KOTA JAMBI from dual union all
select '1572', 'KOTA SUNGAI PENUH from dual union all
select '1601', 'KAB. OGAN KOMERING ULU from dual union all
select '1602', 'KAB. OGAN KOMERING ILIR from dual union all
select '1603', 'KAB. MUARA ENIM from dual union all
select '1604', 'KAB. LAHAT from dual union all
select '1605', 'KAB. MUSI RAWAS from dual union all
select '1606', 'KAB. MUSI BANYUASIN from dual union all
select '1607', 'KAB. BANYUASIN from dual union all
select '1608', 'KAB. OGAN KOMERING ULU TIMUR from dual union all
select '1609', 'KAB. OGAN KOMERING ULU SELATAN from dual union all
select '1610', 'KAB. OGAN ILIR from dual union all
select '1611', 'KAB. EMPAT LAWANG from dual union all
select '1612', 'KAB. PENUKAL ABAB LEMATANG ILIR from dual union all
select '1613', 'KAB. MUSI RAWAS UTARA from dual union all
select '1671', 'KOTA PALEMBANG from dual union all
select '1672', 'KOTA PAGAR ALAM from dual union all
select '1673', 'KOTA LUBUK LINGGAU from dual union all
select '1674', 'KOTA PRABUMULIH from dual union all
select '1701', 'KAB. BENGKULU SELATAN from dual union all
select '1702', 'KAB. REJANG LEBONG from dual union all
select '1703', 'KAB. BENGKULU UTARA from dual union all
select '1704', 'KAB. KAUR from dual union all
select '1705', 'KAB. SELUMA from dual union all
select '1706', 'KAB. MUKO MUKO from dual union all
select '1707', 'KAB. LEBONG from dual union all
select '1708', 'KAB. KEPAHIANG from dual union all
select '1709', 'KAB. BENGKULU TENGAH from dual union all
select '1771', 'KOTA BENGKULU from dual union all
select '1801', 'KAB. LAMPUNG SELATAN from dual union all
select '1802', 'KAB. LAMPUNG TENGAH from dual union all
select '1803', 'KAB. LAMPUNG UTARA from dual union all
select '1804', 'KAB. LAMPUNG BARAT from dual union all
select '1805', 'KAB. TULANG BAWANG from dual union all
select '1806', 'KAB. TANGGAMUS from dual union all
select '1807', 'KAB. LAMPUNG TIMUR from dual union all
select '1808', 'KAB. WAY KANAN from dual union all
select '1809', 'KAB. PESAWARAN from dual union all
select '1810', 'KAB. PRINGSEWU from dual union all
select '1811', 'KAB. MESUJI from dual union all
select '1812', 'KAB. TULANG BAWANG BARAT from dual union all
select '1813', 'KAB. PESISIR BARAT from dual union all
select '1871', 'KOTA BANDAR LAMPUNG from dual union all
select '1872', 'KOTA METRO from dual union all
select '1901', 'KAB. BANGKA from dual union all
select '1902', 'KAB. BELITUNG from dual union all
select '1903', 'KAB. BANGKA SELATAN from dual union all
select '1904', 'KAB. BANGKA TENGAH from dual union all
select '1905', 'KAB. BANGKA BARAT from dual union all
select '1906', 'KAB. BELITUNG TIMUR from dual union all
select '1971', 'KOTA PANGKAL PINANG from dual union all
select '2101', 'KAB. BINTAN from dual union all
select '2102', 'KAB. KARIMUN from dual union all
select '2103', 'KAB. NATUNA from dual union all
select '2104', 'KAB. LINGGA from dual union all
select '2105', 'KAB. KEPULAUAN ANAMBAS from dual union all
select '2171', 'KOTA BATAM from dual union all
select '2172', 'KOTA TANJUNG PINANG from dual union all
select '3101', 'KAB. ADM. KEP. SERIBU from dual union all
select '3171', 'KOTA ADM. JAKARTA PUSAT from dual union all
select '3172', 'KOTA ADM. JAKARTA UTARA from dual union all
select '3173', 'KOTA ADM. JAKARTA BARAT from dual union all
select '3174', 'KOTA ADM. JAKARTA SELATAN from dual union all
select '3175', 'KOTA ADM. JAKARTA TIMUR from dual union all
select '3201', 'KAB. BOGOR from dual union all
select '3202', 'KAB. SUKABUMI from dual union all
select '3203', 'KAB. CIANJUR from dual union all
select '3204', 'KAB. BANDUNG from dual union all
select '3205', 'KAB. GARUT from dual union all
select '3206', 'KAB. TASIKMALAYA from dual union all
select '3207', 'KAB. CIAMIS from dual union all
select '3208', 'KAB. KUNINGAN from dual union all
select '3209', 'KAB. CIREBON from dual union all
select '3210', 'KAB. MAJALENGKA from dual union all
select '3211', 'KAB. SUMEDANG from dual union all
select '3212', 'KAB. INDRAMAYU from dual union all
select '3213', 'KAB. SUBANG from dual union all
select '3214', 'KAB. PURWAKARTA from dual union all
select '3215', 'KAB. KARAWANG from dual union all
select '3216', 'KAB. BEKASI from dual union all
select '3217', 'KAB. BANDUNG BARAT from dual union all
select '3218', 'KAB. PANGANDARAN from dual union all
select '3271', 'KOTA BOGOR from dual union all
select '3272', 'KOTA SUKABUMI from dual union all
select '3273', 'KOTA BANDUNG from dual union all
select '3274', 'KOTA CIREBON from dual union all
select '3275', 'KOTA BEKASI from dual union all
select '3276', 'KOTA DEPOK from dual union all
select '3277', 'KOTA CIMAHI from dual union all
select '3278', 'KOTA TASIKMALAYA from dual union all
select '3279', 'KOTA BANJAR from dual union all
select '3301', 'KAB. CILACAP from dual union all
select '3302', 'KAB. BANYUMAS from dual union all
select '3303', 'KAB. PURBALINGGA from dual union all
select '3304', 'KAB. BANJARNEGARA from dual union all
select '3305', 'KAB. KEBUMEN from dual union all
select '3306', 'KAB. PURWOREJO from dual union all
select '3307', 'KAB. WONOSOBO from dual union all
select '3308', 'KAB. MAGELANG from dual union all
select '3309', 'KAB. BOYOLALI from dual union all
select '3310', 'KAB. KLATEN from dual union all
select '3311', 'KAB. SUKOHARJO from dual union all
select '3312', 'KAB. WONOGIRI from dual union all
select '3313', 'KAB. KARANGANYAR from dual union all
select '3314', 'KAB. SRAGEN from dual union all
select '3315', 'KAB. GROBOGAN from dual union all
select '3316', 'KAB. BLORA from dual union all
select '3317', 'KAB. REMBANG from dual union all
select '3318', 'KAB. PATI from dual union all
select '3319', 'KAB. KUDUS from dual union all
select '3320', 'KAB. JEPARA from dual union all
select '3321', 'KAB. DEMAK from dual union all
select '3322', 'KAB. SEMARANG from dual union all
select '3323', 'KAB. TEMANGGUNG from dual union all
select '3324', 'KAB. KENDAL from dual union all
select '3325', 'KAB. BATANG from dual union all
select '3326', 'KAB. PEKALONGAN from dual union all
select '3327', 'KAB. PEMALANG from dual union all
select '3328', 'KAB. TEGAL from dual union all
select '3329', 'KAB. BREBES from dual union all
select '3371', 'KOTA MAGELANG from dual union all
select '3372', 'KOTA SURAKARTA from dual union all
select '3373', 'KOTA SALATIGA from dual union all
select '3374', 'KOTA SEMARANG from dual union all
select '3375', 'KOTA PEKALONGAN from dual union all
select '3376', 'KOTA TEGAL from dual union all
select '3401', 'KAB. KULON PROGO from dual union all
select '3402', 'KAB. BANTUL from dual union all
select '3403', 'KAB. GUNUNG KIDUL from dual union all
select '3404', 'KAB. SLEMAN from dual union all
select '3471', 'KOTA YOGYAKARTA from dual union all
select '3501', 'KAB. PACITAN from dual union all
select '3502', 'KAB. PONOROGO from dual union all
select '3503', 'KAB. TRENGGALEK from dual union all
select '3504', 'KAB. TULUNGAGUNG from dual union all
select '3505', 'KAB. BLITAR from dual union all
select '3506', 'KAB. KEDIRI from dual union all
select '3507', 'KAB. MALANG from dual union all
select '3508', 'KAB. LUMAJANG from dual union all
select '3509', 'KAB. JEMBER from dual union all
select '3510', 'KAB. BANYUWANGI from dual union all
select '3511', 'KAB. BONDOWOSO from dual union all
select '3512', 'KAB. SITUBONDO from dual union all
select '3513', 'KAB. PROBOLINGGO from dual union all
select '3514', 'KAB. PASURUAN from dual union all
select '3515', 'KAB. SIDOARJO from dual union all
select '3516', 'KAB. MOJOKERTO from dual union all
select '3517', 'KAB. JOMBANG from dual union all
select '3518', 'KAB. NGANJUK from dual union all
select '3519', 'KAB. MADIUN from dual union all
select '3520', 'KAB. MAGETAN from dual union all
select '3521', 'KAB. NGAWI from dual union all
select '3522', 'KAB. BOJONEGORO from dual union all
select '3523', 'KAB. TUBAN from dual union all
select '3524', 'KAB. LAMONGAN from dual union all
select '3525', 'KAB. GRESIK from dual union all
select '3526', 'KAB. BANGKALAN from dual union all
select '3527', 'KAB. SAMPANG from dual union all
select '3528', 'KAB. PAMEKASAN from dual union all
select '3529', 'KAB. SUMENEP from dual union all
select '3571', 'KOTA KEDIRI from dual union all
select '3572', 'KOTA BLITAR from dual union all
select '3573', 'KOTA MALANG from dual union all
select '3574', 'KOTA PROBOLINGGO from dual union all
select '3575', 'KOTA PASURUAN from dual union all
select '3576', 'KOTA MOJOKERTO from dual union all
select '3577', 'KOTA MADIUN from dual union all
select '3578', 'KOTA SURABAYA from dual union all
select '3579', 'KOTA BATU from dual union all
select '3601', 'KAB. PANDEGLANG from dual union all
select '3602', 'KAB. LEBAK from dual union all
select '3603', 'KAB. TANGERANG from dual union all
select '3604', 'KAB. SERANG from dual union all
select '3671', 'KOTA TANGERANG from dual union all
select '3672', 'KOTA CILEGON from dual union all
select '3673', 'KOTA SERANG from dual union all
select '3674', 'KOTA TANGERANG SELATAN from dual union all
select '5101', 'KAB. JEMBRANA from dual union all
select '5102', 'KAB. TABANAN from dual union all
select '5103', 'KAB. BADUNG from dual union all
select '5104', 'KAB. GIANYAR from dual union all
select '5105', 'KAB. KLUNGKUNG from dual union all
select '5106', 'KAB. BANGLI from dual union all
select '5107', 'KAB. KARANGASEM from dual union all
select '5108', 'KAB. BULELENG from dual union all
select '5171', 'KOTA DENPASAR from dual union all
select '5201', 'KAB. LOMBOK BARAT from dual union all
select '5202', 'KAB. LOMBOK TENGAH from dual union all
select '5203', 'KAB. LOMBOK TIMUR from dual union all
select '5204', 'KAB. SUMBAWA from dual union all
select '5205', 'KAB. DOMPU from dual union all
select '5206', 'KAB. BIMA from dual union all
select '5207', 'KAB. SUMBAWA BARAT from dual union all
select '5208', 'KAB. LOMBOK UTARA from dual union all
select '5271', 'KOTA MATARAM from dual union all
select '5272', 'KOTA BIMA from dual union all
select '5301', 'KAB. KUPANG from dual union all
select '5302', 'KAB TIMOR TENGAH SELATAN from dual union all
select '5303', 'KAB. TIMOR TENGAH UTARA from dual union all
select '5304', 'KAB. BELU from dual union all
select '5305', 'KAB. ALOR from dual union all
select '5306', 'KAB. FLORES TIMUR from dual union all
select '5307', 'KAB. SIKKA from dual union all
select '5308', 'KAB. ENDE from dual union all
select '5309', 'KAB. NGADA from dual union all
select '5310', 'KAB. MANGGARAI from dual union all
select '5311', 'KAB. SUMBA TIMUR from dual union all
select '5312', 'KAB. SUMBA BARAT from dual union all
select '5313', 'KAB. LEMBATA from dual union all
select '5314', 'KAB. ROTE NDAO from dual union all
select '5315', 'KAB. MANGGARAI BARAT from dual union all
select '5316', 'KAB. NAGEKEO from dual union all
select '5317', 'KAB. SUMBA TENGAH from dual union all
select '5318', 'KAB. SUMBA BARAT DAYA from dual union all
select '5319', 'KAB. MANGGARAI TIMUR from dual union all
select '5320', 'KAB. SABU RAIJUA from dual union all
select '5321', 'KAB. MALAKA from dual union all
select '5371', 'KOTA KUPANG from dual union all
select '6101', 'KAB. SAMBAS from dual union all
select '6102', 'KAB. MEMPAWAH from dual union all
select '6103', 'KAB. SANGGAU from dual union all
select '6104', 'KAB. KETAPANG from dual union all
select '6105', 'KAB. SINTANG from dual union all
select '6106', 'KAB. KAPUAS HULU from dual union all
select '6107', 'KAB. BENGKAYANG from dual union all
select '6108', 'KAB. LANDAK from dual union all
select '6109', 'KAB. SEKADAU from dual union all
select '6110', 'KAB. MELAWI from dual union all
select '6111', 'KAB. KAYONG UTARA from dual union all
select '6112', 'KAB. KUBU RAYA from dual union all
select '6171', 'KOTA PONTIANAK from dual union all
select '6172', 'KOTA SINGKAWANG from dual union all
select '6201', 'KAB. KOTAWARINGIN BARAT from dual union all
select '6202', 'KAB. KOTAWARINGIN TIMUR from dual union all
select '6203', 'KAB. KAPUAS from dual union all
select '6204', 'KAB. BARITO SELATAN from dual union all
select '6205', 'KAB. BARITO UTARA from dual union all
select '6206', 'KAB. KATINGAN from dual union all
select '6207', 'KAB. SERUYAN from dual union all
select '6208', 'KAB. SUKAMARA from dual union all
select '6209', 'KAB. LAMANDAU from dual union all
select '6210', 'KAB. GUNUNG MAS from dual union all
select '6211', 'KAB. PULANG PISAU from dual union all
select '6212', 'KAB. MURUNG RAYA from dual union all
select '6213', 'KAB. BARITO TIMUR from dual union all
select '6271', 'KOTA PALANGKARAYA from dual union all
select '6301', 'KAB. TANAH LAUT from dual union all
select '6302', 'KAB. KOTABARU from dual union all
select '6303', 'KAB. BANJAR from dual union all
select '6304', 'KAB. BARITO KUALA from dual union all
select '6305', 'KAB. TAPIN from dual union all
select '6306', 'KAB. HULU SUNGAI SELATAN from dual union all
select '6307', 'KAB. HULU SUNGAI TENGAH from dual union all
select '6308', 'KAB. HULU SUNGAI UTARA from dual union all
select '6309', 'KAB. TABALONG from dual union all
select '6310', 'KAB. TANAH BUMBU from dual union all
select '6311', 'KAB. BALANGAN from dual union all
select '6371', 'KOTA BANJARMASIN from dual union all
select '6372', 'KOTA BANJARBARU from dual union all
select '6401', 'KAB. PASER from dual union all
select '6402', 'KAB. KUTAI KARTANEGARA from dual union all
select '6403', 'KAB. BERAU from dual union all
select '6407', 'KAB. KUTAI BARAT from dual union all
select '6408', 'KAB. KUTAI TIMUR from dual union all
select '6409', 'KAB. PENAJAM PASER UTARA from dual union all
select '6411', 'KAB. MAHAKAM ULU from dual union all
select '6471', 'KOTA BALIKPAPAN from dual union all
select '6472', 'KOTA SAMARINDA from dual union all
select '6474', 'KOTA BONTANG from dual union all
select '6501', 'KAB. BULUNGAN from dual union all
select '6502', 'KAB. MALINAU from dual union all
select '6503', 'KAB. NUNUKAN from dual union all
select '6504', 'KAB. TANA TIDUNG from dual union all
select '6571', 'KOTA TARAKAN from dual union all
select '7101', 'KAB. BOLAANG MONGONDOW from dual union all
select '7102', 'KAB. MINAHASA from dual union all
select '7103', 'KAB. KEPULAUAN SANGIHE from dual union all
select '7104', 'KAB. KEPULAUAN TALAUD from dual union all
select '7105', 'KAB. MINAHASA SELATAN from dual union all
select '7106', 'KAB. MINAHASA UTARA from dual union all
select '7107', 'KAB. MINAHASA TENGGARA from dual union all
select '7108', 'KAB. BOLAANG MONGONDOW UTARA from dual union all
select '7109', 'KAB. KEP. SIAU TAGULANDANG BIARO from dual union all
select '7110', 'KAB. BOLAANG MONGONDOW TIMUR from dual union all
select '7111', 'KAB. BOLAANG MONGONDOW SELATAN from dual union all
select '7171', 'KOTA MANADO from dual union all
select '7172', 'KOTA BITUNG from dual union all
select '7173', 'KOTA TOMOHON from dual union all
select '7174', 'KOTA KOTAMOBAGU from dual union all
select '7201', 'KAB. BANGGAI from dual union all
select '7202', 'KAB. POSO from dual union all
select '7203', 'KAB. DONGGALA from dual union all
select '7204', 'KAB. TOLI TOLI from dual union all
select '7205', 'KAB. BUOL from dual union all
select '7206', 'KAB. MOROWALI from dual union all
select '7207', 'KAB. BANGGAI KEPULAUAN from dual union all
select '7208', 'KAB. PARIGI MOUTONG from dual union all
select '7209', 'KAB. TOJO UNA UNA from dual union all
select '7210', 'KAB. SIGI from dual union all
select '7211', 'KAB. BANGGAI LAUT from dual union all
select '7212', 'KAB. MOROWALI UTARA from dual union all
select '7271', 'KOTA PALU from dual union all
select '7301', 'KAB. KEPULAUAN SELAYAR from dual union all
select '7302', 'KAB. BULUKUMBA from dual union all
select '7303', 'KAB. BANTAENG from dual union all
select '7304', 'KAB. JENEPONTO from dual union all
select '7305', 'KAB. TAKALAR from dual union all
select '7306', 'KAB. GOWA from dual union all
select '7307', 'KAB. SINJAI from dual union all
select '7308', 'KAB. BONE from dual union all
select '7309', 'KAB. MAROS from dual union all
select '7310', 'KAB. PANGKAJENE KEPULAUAN from dual union all
select '7311', 'KAB. BARRU from dual union all
select '7312', 'KAB. SOPPENG from dual union all
select '7313', 'KAB. WAJO from dual union all
select '7314', 'KAB. SIDENRENG RAPPANG from dual union all
select '7315', 'KAB. PINRANG from dual union all
select '7316', 'KAB. ENREKANG from dual union all
select '7317', 'KAB. LUWU from dual union all
select '7318', 'KAB. TANA TORAJA from dual union all
select '7322', 'KAB. LUWU UTARA from dual union all
select '7324', 'KAB. LUWU TIMUR from dual union all
select '7326', 'KAB. TORAJA UTARA from dual union all
select '7371', 'KOTA MAKASSAR from dual union all
select '7372', 'KOTA PARE PARE from dual union all
select '7373', 'KOTA PALOPO from dual union all
select '7401', 'KAB. KOLAKA from dual union all
select '7402', 'KAB. KONAWE from dual union all
select '7403', 'KAB. MUNA from dual union all
select '7404', 'KAB. BUTON from dual union all
select '7405', 'KAB. KONAWE SELATAN from dual union all
select '7406', 'KAB. BOMBANA from dual union all
select '7407', 'KAB. WAKATOBI from dual union all
select '7408', 'KAB. KOLAKA UTARA from dual union all
select '7409', 'KAB. KONAWE UTARA from dual union all
select '7410', 'KAB. BUTON UTARA from dual union all
select '7411', 'KAB. KOLAKA TIMUR from dual union all
select '7412', 'KAB. KONAWE KEPULAUAN from dual union all
select '7413', 'KAB. MUNA BARAT from dual union all
select '7414', 'KAB. BUTON TENGAH from dual union all
select '7415', 'KAB. BUTON SELATAN from dual union all
select '7471', 'KOTA KENDARI from dual union all
select '7472', 'KOTA BAU BAU from dual union all
select '7501', 'KAB. GORONTALO from dual union all
select '7502', 'KAB. BOALEMO from dual union all
select '7503', 'KAB. BONE BOLANGO from dual union all
select '7504', 'KAB. PAHUWATO from dual union all
select '7505', 'KAB. GORONTALO UTARA from dual union all
select '7571', 'KOTA GORONTALO from dual union all
select '7601', 'KAB. MAMUJU UTARA from dual union all
select '7602', 'KAB. MAMUJU from dual union all
select '7603', 'KAB. MAMASA from dual union all
select '7604', 'KAB. POLEWALI MANDAR from dual union all
select '7605', 'KAB. MAJENE from dual union all
select '7606', 'KAB. MAMUJU TENGAH from dual union all
select '8101', 'KAB. MALUKU TENGAH from dual union all
select '8102', 'KAB. MALUKU TENGGARA from dual union all
select '8103', 'KAB MALUKU TENGGARA BARAT from dual union all
select '8104', 'KAB. BURU from dual union all
select '8105', 'KAB. SERAM BAGIAN TIMUR from dual union all
select '8106', 'KAB. SERAM BAGIAN BARAT from dual union all
select '8107', 'KAB. KEPULAUAN ARU from dual union all
select '8108', 'KAB. MALUKU BARAT DAYA from dual union all
select '8109', 'KAB. BURU SELATAN from dual union all
select '8171', 'KOTA AMBON from dual union all
select '8172', 'KOTA TUAL from dual union all
select '8201', 'KAB. HALMAHERA BARAT from dual union all
select '8202', 'KAB. HALMAHERA TENGAH from dual union all
select '8203', 'KAB. HALMAHERA UTARA from dual union all
select '8204', 'KAB. HALMAHERA SELATAN from dual union all
select '8205', 'KAB. KEPULAUAN SULA from dual union all
select '8206', 'KAB. HALMAHERA TIMUR from dual union all
select '8207', 'KAB. PULAU MOROTAI from dual union all
select '8208', 'KAB. PULAU TALIABU from dual union all
select '8271', 'KOTA TERNATE from dual union all
select '8272', 'KOTA TIDORE KEPULAUAN from dual union all
select '9101', 'KAB. MERAUKE from dual union all
select '9102', 'KAB. JAYAWIJAYA from dual union all
select '9103', 'KAB. JAYAPURA from dual union all
select '9104', 'KAB. NABIRE from dual union all
select '9105', 'KAB. KEPULAUAN YAPEN from dual union all
select '9106', 'KAB. BIAK NUMFOR from dual union all
select '9107', 'KAB. PUNCAK JAYA from dual union all
select '9108', 'KAB. PANIAI from dual union all
select '9109', 'KAB. MIMIKA from dual union all
select '9110', 'KAB. SARMI from dual union all
select '9111', 'KAB. KEEROM from dual union all
select '9112', 'KAB PEGUNUNGAN BINTANG from dual union all
select '9113', 'KAB. YAHUKIMO from dual union all
select '9114', 'KAB. TOLIKARA from dual union all
select '9115', 'KAB. WAROPEN from dual union all
select '9116', 'KAB. BOVEN DIGOEL from dual union all
select '9117', 'KAB. MAPPI from dual union all
select '9118', 'KAB. ASMAT from dual union all
select '9119', 'KAB. SUPIORI from dual union all
select '9120', 'KAB. MAMBERAMO RAYA from dual union all
select '9121', 'KAB. MAMBERAMO TENGAH from dual union all
select '9122', 'KAB. YALIMO from dual union all
select '9123', 'KAB. LANNY JAYA from dual union all
select '9124', 'KAB. NDUGA from dual union all
select '9125', 'KAB. PUNCAK from dual union all
select '9126', 'KAB. DOGIYAI from dual union all
select '9127', 'KAB. INTAN JAYA from dual union all
select '9128', 'KAB. DEIYAI from dual union all
select '9171', 'KOTA JAYAPURA from dual union all
select '9201', 'KAB. SORONG from dual union all
select '9202', 'KAB. MANOKWARI from dual union all
select '9203', 'KAB. FAK FAK from dual union all
select '9204', 'KAB. SORONG SELATAN from dual union all
select '9205', 'KAB. RAJA AMPAT from dual union all
select '9206', 'KAB. TELUK BINTUNI from dual union all
select '9207', 'KAB. TELUK WONDAMA from dual union all
select '9208', 'KAB. KAIMANA from dual union all
select '9209', 'KAB. TAMBRAUW from dual union all
select '9210', 'KAB. MAYBRAT from dual union all
select '9211', 'KAB. MANOKWARI SELATAN from dual union all
select '9212', 'KAB. PEGUNUNGAN ARFAK from dual union all
select '9271', 'KOTA SORONG')
select * from names;