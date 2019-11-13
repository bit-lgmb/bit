# LaTeX2HTML 2002 (1.62)
# Associate sections original text with physical files.


$key = q/1 0 0 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0/;
$section_info{$key} = '3%:%'."$dir".q|revision.html%:%Conte&#250;do%:%| unless ($section_info{$key}); 
$noresave{$key} = "$nosave";
$done{"${dir}revision.html"} = 1;

$key = q/1 0 0 6 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0/;
$section_info{$key} = '3%:%'."$dir".q|revision.html%:%Sobre este documento ...%:%| unless ($section_info{$key}); 
$noresave{$key} = "$nosave";
$done{"${dir}revision.html"} = 1;

$key = q/1 0 0 4 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0/;
$section_info{$key} = '3%:%'."$dir".q|revision.html%:%Data e carga de revisores%:%| unless ($section_info{$key}); 
$noresave{$key} = "$nosave";
$done{"${dir}revision.html"} = 1;

$key = q/1 0 0 3 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0/;
$section_info{$key} = '3%:%'."$dir".q|revision.html%:%Procedimentos de revisão de código%:%| unless ($section_info{$key}); 
$noresave{$key} = "$nosave";
$done{"${dir}revision.html"} = 1;

$key = q/1 0 0 5 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0/;
$section_info{$key} = '3%:%'."$dir".q|revision.html%:%Exceções a revisão%:%| unless ($section_info{$key}); 
$noresave{$key} = "$nosave";
$done{"${dir}revision.html"} = 1;

$key = q/1 0 0 2 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0/;
$section_info{$key} = '3%:%'."$dir".q|revision.html%:%Introdução%:%| unless ($section_info{$key}); 
$noresave{$key} = "$nosave";
$done{"${dir}revision.html"} = 1;

$key = q/1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0/;
$section_info{$key} = '0%:%'."$dir".q|revision.html%:%LBC.BIT.PDR.0001 Procedimentos de revis&#227;o de c&#243;digo.
<SUP>1</SUP>%:%| unless ($section_info{$key}); 
$noresave{$key} = "$nosave";
$done{"${dir}revision.html"} = 1;

1;

