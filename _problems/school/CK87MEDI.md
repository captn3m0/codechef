---
{"category_name":"school","problem_code":"CK87MEDI","problem_name":"Chef and Employment Test","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"saeed_sryhini","problem_tester":"kingofnumbers","date_added":"19-10-2017","tags":{"0":"cakewalk","1":"cook87","2":"median","3":"saeed_sryhini","4":"sorting"},"time":{"view_start_date":1508697000,"submit_start_date":1508697000,"visible_start_date":1508697000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/mandarin/CK87MEDI.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/russian/CK87MEDI.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/vietnamese/CK87MEDI.pdf">Vietnamese</a> as well.</h3>

<p>Even though it was a little unexpected, Chef did it! He has finally opened a new restaurant!</p>

<p>As you all know, to make everything go well, Chef needs employees (co-chefs if you might say). Because Chef is a perfectionist, he planned to employ only chefs who are good at competitive progeamming. Hence, Chef asked for help from his friends Shahhoud and Said. Knowing that many people (such as Ahmad, Nour, Majd and Joud) will apply for the job, they decided to choose only the best appliers.</p>

<p>As the day of the employment came, people lined up in front of the restaurant applying for the job. Before accepting any appliers, Shahhoud and Said decided to make them answer a simple question, in order to determine which of them better deserves the job.</p>

<p>Given an array of <b>N</b> elements <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>, each applier was asked to insert any <b>K</b> integers he wants to this array. Eventually, each applier will be asked to write down the median among all the elements in his resulting array. Many appliers asked for your help to determine what is the greatest median they can get after inserting any <b>K</b> elements they want?</p>

<p>Note that the median in an array is the element positioned at the center of the array after sorting it. E.g. the median in <b>[2, 1, 5, 2, 4]</b> is <b>2</b>, and the median in <b>[3, 3, 1, 3, 3]</b> is <b>3</b>.</p>
<p> </p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>

<p>The first line of each test case contains two space separated integers <b>N</b> and <b>K</b> denoting the array length, and the number of elements to be inserted.</p>

<p>The second line of each test case contains <b>N</b> space separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, <b>...</b>, <b>A<sub>N</sub></b> denoting the elements of the array.</p>

<h3>Output</h3>
<p>For each test case output a single line, containing a single integer, indicating the greatest median the applier can obtain after inserting exactly <b>K</b> new elements into the given array.</p>


<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100.</b></li>
<li><b>0 ≤ K &lt; N ≤ 100.</b></li>
<li><b>0 ≤ A<sub>i</sub> ≤ 1000</b>.</li>
<li><b>N + K</b> is guaranteed to be <b>odd.</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 1
4 7
4 3
9 2 8 6
5 2
6 1 1 1 1

<b>Output:</b>
7
9
1
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> One of the possible solutions is to add <b>9</b> making the array <b>[4, 7, 9]</b>, whose median is <b>7</b></p>
<p><b>Example case 3.</b> No matter what elements you add to this array, the median will always be <b>1</b></p>