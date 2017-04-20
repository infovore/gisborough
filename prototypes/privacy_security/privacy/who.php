<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">

<h1>Who you show it to</h1>

<p>Do you want to limit which people can see what you think and do?</p>

<p>If so, who do you feel comfortable seeing? Friends and family? Friends of your friends too? Anyone anywhere in the world?</p>

<p>Perhaps who can see changes with what you're showing. You have control over what you put out there.</p>
<hr/>
Aspects of privacy:
[[What you show|privacyWhat]]
<em>To who</em>
[[How|privacyHow]]
[[Where|privacyWhere]]
[[When|privacyWhen]]

(if: (history:) contains "privacyWhat" and (history:) contains "privacyHow" and (history:) contains "privacyWhere" and (history:) contains "privacyWhen")[
<hr/>
Of course, sometimes, we hear about [[privacy breaches|breaches]].
]

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
