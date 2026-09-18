<?php
function executeEmergencySurfacing(string $valve, string $ballast): void
{
    if ($valve === "VALVE_OPEN" && $ballast === "BALLAST_PURGE") {
        echo "🌊 【浮上成功】排水弁開放・バラストパージ確認！急浮上開始！\n";
    } else {
        echo "⚠️ 【危険】引数異常: valve='{$valve}', ballast='{$ballast}'\n";
        exit(1);
    }
}

echo "=== 潜水艇管制 ===\n";
usleep(500000);
// ==========================================
// 【指示】下の1行を各自の引数に追加せよ！
// 担当A: executeEmergencySurfacing("VALVE_OPEN", "");
// 担当B: executeEmergencySurfacing("", "BALLAST_PURGE");
executeEmergencySurfacing("", "BALLAST_PURGE");
// ==========================================
