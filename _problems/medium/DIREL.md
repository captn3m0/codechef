---
{"category_name":"medium","problem_code":"DIREL","problem_name":"Distant Relatives","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":"gerald","date_added":"23-02-2014","tags":{"0":"ad","1":"cook45","2":"easy","3":"graph","4":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/DIREL","time":{"view_start_date":1398018600,"submit_start_date":1398018600,"visible_start_date":1398018600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/mandarin/DIREL.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/russian/DIREL.pdf">Russian</a> as well.</h3>
<p></p><p>Chef is giving a big party to all his friends and their relatives. Relatives of very far-away (by relation) will be present. Little Joe (uninvited) is curious to know how distant two people are, say <b>X</b> and <b>Y</b>.</p>
<p>There are 6 fundamental relations: father relation, mother relation, son relation, daughter relation, brother relation and sister relation. Using these fundamental relations we can describe all other relations between relatives. For example, one can say that Chef Prime is son of daughter of sister of father of father of Chef Composite.</p>
<p>You are given <b>R</b> relations of form "<b>A</b> is <b>F</b> of <b>B</b>", for <b>N</b> people from the party. There variable <b>F</b> is one of the following strings: father, mother, son, daughter, brother, sister. Also you are given <b>Q</b> queries of Little Joe, each query has form "<b>X</b> <b>Y</b>". For each query output the distance between persons <b>X</b> and <b>Y</b>. Distance is equal to the minimal number of fundamental relations appearing while describing the relation between <b>X</b> and <b>Y</b>. For example distance between Chef Prime and Chef Composite is 5. </p>
<p><b>Important points:</b></p>
<p>1. Here brother (or sister) relation is considered between children of same parents only. Hence cousins are not considered brother (or sister) .</p>
<p>2. Given relations meet all the following conditions:</p>
<ul>
<li>Each person has an unique name, and each name appears in at least one relation (as <b>A</b>, or as <b>B</b>).</li>
<li>No name appears more than once as the first part of relation (as <b>A</b>).</li>
<li>There is no cyclic relations. For example, the following relations cannot appear simultaneously in some testcase "<b>A</b> is <b>F<sub>1</sub></b> of <b>B</b>", "<b>B</b> is <b>F<sub>2</sub></b> of <b>C</b>" and "<b>C</b> is <b>F<sub>3</sub></b> of <b>A</b>".</li>
</ul>

<p>3. One can have at most one father and at most one mother. And in Chef's land no one takes divorce!</p>
<p>4. Since you should calculate the minimal fundamental relations between some persons, you need to make some conclusion. For example, if <b>X</b> is father of <b>Y</b>, and <b>Y</b> is brother of <b>Z</b>, then <b>X</b> is father of <b>Z</b>.</p>
<h3>Input</h3>
<p>The first line contains two integers <b>N</b>, number of people, and <b>R</b>, number of relations. Then <b>R</b> lines follow. Each line contains a relation of form "<b>A</b> is <b>F</b> of <b>B</b>".</p>
<p>The next line contains integer <b>Q</b>, number of queries. Each of the next <b>Q</b> lines contains two space-separated strings <b>X</b> and <b>Y</b>, denoting the query of the Little Joe. <b>X</b> and <b>Y</b> are guaranteed to be valid names mentioned above in relations.</p>
<h3>Output</h3>
<p>Output <b>Q</b> lines each containing distance for <b>i</b><sup>th</sup> query. Print '-1' (without quotes) if <b>X</b> and <b>Y</b> are not related in any manner.</p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>256</b></li>
<li><b>1</b> ≤ <b>R</b> &lt; <b>N</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>16384</b></li>
<li><b>1</b> ≤ <b>Length of string A, B, X, Y</b> ≤ <b>4</b></li>
<li><b>A</b> ≠ <b>B</b></li>
<li><b>X</b> ≠ <b>Y</b></li>
<li>Input relations are correct in terms of gender.</li>
<li>Each name consists of lower case alphabets ("a-z") only.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
8 7
tom is brother of ron
ron is brother of john
john is father of kel
kel is son of cloe
cloe is sister of ru
anne is daughter of cloe
ru is mother of fred
5
kel john
ron kel
john ru
john kel
john anne

<b>Output:</b>
1
2
3
1
1
</pre><p> </p>
<h3>Explanation</h3>
<p>Consider the first query: kel is son of john, so the distance = 1</p>
<p>Consider the second query: ron is brother of father of kel, so the distance = 2</p>
<p>Consider the third query: john is father of son of sister of ru, so the distance = 3. Note that relation between john and ru can also be expressed as john is father of daughter of sister of ru</p>
