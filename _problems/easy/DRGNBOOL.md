---
{"category_name":"easy","problem_code":"DRGNBOOL","problem_name":"Fierce Battles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"anton_lunyov","date_added":"19-04-2012","tags":{"0":"cakewalk","1":"kaushik_iska","2":"oct12"},"editorial_url":"http://discuss.codechef.com/problems/DRGNBOOL","time":{"view_start_date":1350293400,"submit_start_date":1350293400,"visible_start_date":1350293400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
In the world of <b>DragonBool</b> there are fierce warriors called <b>Soints</b>. Also there are even fiercer warriors called <b>Sofloats</b> &ndash; the mortal enemies of <b>Soints</b>.
</p>

<p>
The power of each warrior is determined by the amount of chakra he possesses which is some positive integer. Warriors with zero level of chakra are dead warriors :) When the fight between <b>Soint</b> with power <b>C<sub>I</sub></b> and <b>Sofloat</b> with power <b>C<sub>F</sub></b> occurs the warrior with lower power will die and the winner will lose the amount of chakra that his enemy have possessed before the fight. So three cases are possible:
<ul>
<li><b>C<sub>I</sub></b> &gt; <b>C<sub>F</sub></b>. Then <b>Sofloat</b> will die while the new power of <b>Soint</b> will be <b>C<sub>I</sub> &ndash; C<sub>F</sub></b>.</li>

<li><b>C<sub>I</sub></b> &lt; <b>C<sub>F</sub></b>. Then <b>Soint</b> will die while the new power of <b>Sofloat</b> will be <b>C<sub>F</sub> &ndash; C<sub>I</sub></b>.</li>

<li><b>C<sub>I</sub></b> = <b>C<sub>F</sub></b>. In this special case both warriors die.</li>
</ul>
</p>

<p>
Each warrior (<b>Soint</b> or <b>Sofloat</b>) has his level of skills which is denoted by some positive integer. The fight between two warriors can occur only when these warriors are <b>Soint</b> and <b>Sofloat</b> of the same level. In particual, friendly fights are not allowed, i.e., a <b>Soint</b> cannot fight with another <b>Soint</b> and the same holds for <b>Sofloats</b>.
</p>

<p>
Lets follow the following convention to denote the warriors. A <b>Soint</b> of level <b>L</b> and power <b>C</b> will be denoted as <b>(I, C, L)</b>, while <b>Sofloat</b> of level <b>L</b> and power <b>C</b> will be denoted as <b>(F, C, L)</b>. Consider some examples. If <b>A = (I, 50, 1)</b> fights with <b>B = (F, 20, 1)</b>, <b>B</b> dies and <b>A</b> becomes <b>(I, 30, 1)</b>. On the other hand, <b>(I, 50, 1)</b> cannot fight with <b>(F, 20, 2)</b> as they have different levels.
</p>

<p>
There is a battle between <b>Soints</b> and <b>Sofloats</b>. There are <b>N Soints</b> and <b>M Sofloats</b> in all. The battle will consist of series of fights. As was mentioned above in each fight one <b>Soint</b> and one <b>Sofloat</b> <i>of the same level</i> take part and after the fight the warrior with lower power will die (or both will die if they have the same power). The battle proceeds as long as there exists at least one pair of warriors who can fight. The distribution of warriors by levels satisfies the following condition: for every <b>Soint</b> of level <b>L</b> there exists at least one <b>Sofloat</b> of the same level <b>L</b> and vice-versa. So if for some level <b>L</b> we have at least one warrior of this level then there is at least one <b>Soint</b> of level <b>L</b> and at least one <b>Sofloat</b> of level <b>L</b>.
</p>

<p>
There is a powerful wizard, whose name is <b>SoChef</b>, on the side of <b>Soints</b>. He can increase the amount of chakra of each <b>Soint</b> by any number. <b>SoChef</b> wants the army of <b>Soints</b> to win this battle. But increasing amount of chakra of any <b>Soint</b> by one costs him a lot of his magic power. Hence he wants to minimize the total amount of additional chakra he should give to <b>Soints</b> in order for them to win. Note, however, that the win here means that all <b>Sofloats</b> should be dead irregardless of whether any <b>Soint</b> is alive. Also note that the battle can proceed by different scenarios and the <b>SoChef</b> need to distribute additional chakra among the <b>Soints</b> in such a way that they will win for any possible battle scenario. Help <b>SoChef</b> and find the minimal amount of additional chakra he should give to <b>Soints</b> in order for them to win.
</p>

<h3>Input</h3>

<p>
The first line of the input contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains two space separated integers <b>N</b> and <b>M</b>. Here <b>N</b> is the number of <b>Soints </b> participating in the battle and <b>M</b> is the number of <b>Sofloats </b> for the same. Each of the next <b>N</b> lines contains two space separated integers <b> C<sub>i</sub></b> and <b> L<sub>i</sub></b>, the amount of chakra and level of <b>i</b>-th <b>Soint</b> correspondingly. The next <b>M</b> lines describe power and level of <b>Sofloats</b> participating in the battle in the same format.
</p>

<h3>Output</h3>
<p>
For each test case output a single integer on a single line, the minimum amount of chakra <b>SoChef</b> should give to <b>Soints</b> in order for them to win the battle.
</p>

<h3>Constraints</h3>
<p>Each integer in the input file is positive and does not exceed <b>100</b>. That is</p>
<b>1</b> &le; <b>T</b> &le; <b>100</b><br />
<b>1</b> &le; <b>N</b> &le; <b>100</b><br />
<b>1</b> &le; <b>M</b> &le; <b>100</b><br />
<b>1</b> &le; <b>C<sub>i</sub></b> &le; <b>100</b><br />
<b>1</b> &le; <b>L<sub>i</sub></b> &le; <b>100</b><br />
<p>For every <b>Soint</b> of level <b>L</b> there exists at least one <b>Sofloat</b> of the same level <b>L</b> and vice-versa.</p>
<p><b>It is guaranteed that each official test file will satisfy all these constraints. You DON'T need to verify them in your program.</b></p>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
2 3
10 1
20 2
5 2
5 2
18 1
5 5
73 87
69 13
36 36
77 46
43 93
49 46
74 93
78 87
99 13
59 36

<b>Output:</b>
8
89
</pre>

<h3>Explanation</h3>

<p>
<b>Case 1.</b>
The warriors are <b>I1 = (I, 10, 1), I2 = (I, 20, 2), F1 = (F, 5, 2), F2 = (F, 5, 2), F3 = (F, 18, 1)</b>. Without the <b>SoChef</b> help the battle can proceed as follows.
</p>

<ul>
<li><b>I2</b> fights with <b>F1</b>, <b>F1</b> dies, <b>I2</b> becomes <b>(I, 15, 2)</b>.</li>
<li><b>I2</b> fights with <b>F2</b>, <b>F2</b> dies, <b>I2</b> becomes <b>(I, 10, 2)</b>.</li>
<li><b>I1</b> fights with <b>F3</b>, <b>I1</b> dies, <b>F3</b> becomes <b>(F, 8, 1)</b>.</li>
</ul>

<p>
So if <b>SoChef</b> will give <b>8</b> additional units of chakra to <b>I1</b> the <b>Soints</b> will win the battle and even one <b>Soint</b> (<b>I2</b>) will left alive. Hence the answer is <b>8</b>.
</p>