<?php
//Copyright (c) 2016 iFeiwu.com
 class Trash extends Item { function __construct() { $this->table = "\164\162\141\163\150"; parent::__construct(); } protected function postDelete($request_data) { goto ell12; jyseL: foreach ($ids as $id) { goto IZehI; qJcf_: if ($this->db->delete($this->table, array("\151\x64", "\x3d", $id))->is()) { goto oA8fp; } goto rOBBb; qIxrZ: goto dZIKJ; goto G1C8M; rOBBb: $error[] = $trash["\164\x69\164\154\x65"]; goto qIxrZ; aVwih: $this->_rmdir("\56\x2e\x2f" . $path); goto XePZO; uhvxy: $path = $trash["\x70\141\164\x68"]; goto qJcf_; umRmV: dZIKJ: goto HwRzi; XePZO: N03eZ: goto umRmV; HwRzi: BX4ff: goto eijgW; aQhQA: if (!($path && count(explode("\x2f", $path)) >= 2)) { goto N03eZ; } goto aVwih; G1C8M: oA8fp: goto aQhQA; IZehI: $trash = $this->db->select($this->table)->where(array("\151\144", "\x3d", $id))->get(); goto uhvxy; eijgW: } goto Dds2B; ell12: $error = array(); goto FMlwv; gBq3_: x1i1F: goto B0ML7; ac7G9: fj05w: goto qUJiq; awKWm: if (count($error) === 0) { goto fj05w; } goto yhbpj; JxYk7: goto x1i1F; goto ac7G9; FMlwv: $ids = $request_data["\151\144"]; goto cblse; L1z43: $this->_log("\x64\145\154\145\164\145", array("\164\151\164\154\145" => count($ids))); goto CL27D; qUJiq: $this->db->commit(); goto L1z43; Z_qTm: return $this->error(); goto JxYk7; Dds2B: HXw_m: goto awKWm; CL27D: return $this->success(); goto gBq3_; yhbpj: $this->db->rollBack(); goto Z_qTm; cblse: $this->db->beginTransaction(); goto jyseL; B0ML7: } protected function postReplay($request_data) { goto VyReE; HGYTO: goto af29f; goto pFXai; cEaAH: $this->db->beginTransaction(); goto BDMC7; OopNb: return $this->success(); goto LGkBa; HRt_A: return $this->error(); goto HGYTO; BDMC7: foreach ($ids as $id) { goto Q9dYQ; DKS2c: EIadV: goto jdfv3; Q9dYQ: $trash = $this->db->select($this->table)->where(array("\151\x64", "\75", $id))->get(); goto ganDu; HIfsH: if ($isadd === false) { goto HRPMa; } goto lfc0g; ganDu: $table = $trash["\164\x61\x62\x6c\145"]; goto zLAsx; ZR4iX: goto EIadV; goto QluaK; QluaK: HRPMa: goto aqwUu; jdfv3: hEy12: goto aj3rv; lfc0g: $this->db->delete($this->table, array("\x69\x64", "\x3d", $id)); goto ZR4iX; aqwUu: $error[] = $trash["\x74\151\164\154\x65"]; goto DKS2c; zLAsx: $isadd = $this->db->insert($table, json_decode($trash["\x64\141\164\141"], true)); goto HIfsH; aj3rv: } goto a9ovg; a9ovg: xOK4H: goto mmqXM; mmqXM: if (count($error) === 0) { goto wKHNL; } goto mwqLn; pFXai: wKHNL: goto z_0FX; LGkBa: af29f: goto bgKlX; VyReE: $error = array(); goto nG8Lc; z_0FX: $this->db->commit(); goto Plac7; mwqLn: $this->db->rollBack(); goto HRt_A; Plac7: $this->_log("\x72\x65\160\x6c\171", array("\x74\151\164\x6c\x65" => count($ids))); goto OopNb; nG8Lc: $ids = $request_data["\x69\x64"]; goto cEaAH; bgKlX: } }
