# ComparOperator
pour cette erreur : sql_mode=only_full_group_by in
mettre ça dans le sql  : 
SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
