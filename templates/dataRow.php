<?php $dataStr = "";?>
<?php foreach($inventoryData as $inventory):?>
<?php
$dataStr.= '<Row ss:AutoFitHeight="0" ss:Height="36.75">
    <Cell ss:StyleID="s81"><Data ss:Type="Number">'.$inventory->quantity.'</Data><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s82"><Data ss:Type="String">'.$inventory->category.'</Data><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s82"><Data ss:Type="String">'.$inventory->name.'</Data><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s82"><Data ss:Type="String">'.$inventory->vendor.'</Data><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s82"><Data ss:Type="String">'.$inventory->sticker.'</Data><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s82"><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s82"><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s83"><Data ss:Type="Number">3.39</Data><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s83" ss:Formula="=RC[-8]*RC[-1]"><Data ss:Type="Number">16.95</Data><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s84"><Data ss:Type="DateTime">2013-10-31T00:00:00.000</Data><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s82"><Data ss:Type="String">Fair</Data><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s82"><Data ss:Type="String">Atlas - Kansas</Data><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s82"><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s82"><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
    <Cell ss:StyleID="s85"><NamedCell
      ss:Name="Z_79A8FF9D_AE27_4804_9E4F_EA68BC89DD6E_.wvu.FilterData"/><NamedCell
      ss:Name="_FilterDatabase"/></Cell>
   </Row>';?>
   <?php endforeach;?>
<?php return $dataStr;?>
