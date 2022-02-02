---
{"category_name":"medium","problem_code":"WEAPONS","problem_name":"Fusing Weapons ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"20-10-2016","tags":{"0":"kingofnumbers"},"time":{"view_start_date":1498908900,"submit_start_date":1498908900,"visible_start_date":1498908900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKFL17/mandarin/WEAPONS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/russian/WEAPONS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/vietnamese/WEAPONS.pdf">Vietnamese</a> as well.</h3>

<p>Chef has recently started becoming a fan of computer games. He is currently playing a game in which he controls a warrior who is fighting evil monsters.</p>

<p>Before the start of each stage, <b>N</b> weapons appear on the screen in circular order. Each weapon has an integer associated with it, which represents its <i>level</i>. The chef can choose two adjacent weapons of the same level and fuse them into a single weapon of level <b>A+1</b>, where <b>A</b> is the level of the weapons before fusing. Both the old weapons will disappear and the new weapon will be placed in the place of the old weapons, shrinking the circle.</p>

<p>Chef can fuse as many times as he wants, and in each stage, he wants to make a weapon with as high a level as possible. Each stage is independent of other stages.</p>

<p>Please help Chef by figuring out the maximum level of a weapon that he can get in each stage.</p>

<h3>Input</h3>
<p>The first line contains integer <b>T</b>, denoting the number of stages. The description of each stage follows.</p>
<p>The first line of each stage's description contains an integer <b>N</b>, denoting the number of weapons.</p>
<p>The second line contains <b>N</b> space-separated integers: <b>L<sub>1</sub></b>, <b>L<sub>2</sub></b>, ..., <b>L<sub>N</sub></b>, where <b>L<sub>i</sub></b> is the level of the i-th weapon. The i-th and (i+1)-th weapons are adjacent for all i which satisfy 1 ≤ i &lt; <b>N</b>. Additionally, the first and <b>N</b>-th weapons are also adjacent.</p>

<h3>Output</h3>
<p>For each stage, output a single integer in new line, which should be the maximum level of a weapon that Chef can get.</p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b> ≤ 200,000</li>
<li>1 ≤ sum of <b>N</b> in all stages ≤ 200,000</li>
<li>1 ≤ <b>L<sub>i</sub></b> ≤ 200,000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
4
3 3 1 4
6
2 3 3 3 1 1

<b>Output:</b>
5
5
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> The initial state is (3, 3, 1, 4). The Chef can fuse the first two weapons and get (4, 1, 4). Then he can fuse the first and last weapons to get (5, 1). Now, he can't do anything else. He has gotten a weapon of level 5, and you can show that there is no way to get a weapon of a higher level. Hence the answer is 5.</p>

<p><b>Example case 2:</b> The initial state is (2, 3, 3, 3, 1, 1). The Chef can fuse the last two weapons and get the state (2, 3, 3, 3, 2). He can then fuse the first and fifth weapons and get (3, 3, 3, 3). Now, he can fuse the first and second to get (4, 3, 3). Then he fuses the second and third to get (4, 4). Finally, he fuses the first and second to get (5). You can check that nothing better can be achieved, and hence the answer is 5.</p>
