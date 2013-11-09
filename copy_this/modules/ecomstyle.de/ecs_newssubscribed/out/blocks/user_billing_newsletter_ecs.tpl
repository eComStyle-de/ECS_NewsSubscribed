[{ if (($oxcmp_user) != null) && !$oxcmp_user->inGroup( 'oxidnewsletter' ) }] 
[{$smarty.block.parent}]
[{/if}]