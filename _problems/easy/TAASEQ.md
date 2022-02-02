---
{"category_name":"easy","problem_code":"TAASEQ","problem_name":"The Lost Arithmetic Sequences","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"errichto","date_added":"8-09-2016","tags":{"0":"cook74","1":"dynamic","2":"easy","3":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TAASEQ","time":{"view_start_date":1474223400,"submit_start_date":1474223400,"visible_start_date":1474223400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/mandarin/TAASEQ.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/russian/TAASEQ.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/vietnamese/TAASEQ.pdf">Vietnamese</a> as well.</h3>



<p>
Jem couldn't even finish half of the homework exercises in "Advanced topics in algorithm" class. The teacher is really upset and gives him one final problem to solve - if he can't solve it, he is gonna fail the course.
</p>

<p>
Jem is given an array <b>A</b> consisting of <b>N</b> integers. The teacher asks him to remove exactly one number in the array to make the array become an arithmetic progressions.</p>

<p>
Jem wanted to ask the teacher about the definition of arithmetic progressions but he remembered that he had heard this term in last week's lesson just before falling asleep. Now his life is in your hands again!
</p>

<p>
Anyways, we provide you the definition of arithmetic progression. Arithmetic progression is a sequence of numbers, where the difference between any two adjacent numbers is same.
</p>

<h3>Input</h3>
<p>Input contains mutilpe test cases. The first line of the input contains a single integer <b>T</b> represents the number of tests. It is followed by T group of line represent the test cases.</p>
<p>Each test case consists of two lines where the first line contains a single integer <b>N</b>.</p>
<p>The second line contains <b>N</b> space separated integers denoting the array <b>A</b>.</p>

<h3>Output</h3>
<p>For each test case print out single integer which is the number you will remove from the array. If there is more than one solution take the smallest one. If there is no solution print out -1.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10 </b></li>
<li><b>2 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>0 ≤ A<sub>i</sub> ≤ 10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>:
3
2
3 4
4
1 5 3 4
6
2 4 6 7 8 10

<b>Output</b>:
3
-1
7
</pre>

<h3>Explaination</h3>
<p>
<b>test 1:</b> an array contain a single integer is considered to be an arithmetic progression so you can remove any number in the array. But note that we must print out the <b>smallest result</b> which is 3.
</p>

<p>
<b>test 2:</b> there is no solution since none of [1, 3, 4], [1, 5, 3], [1, 5, 4], [5, 3, 4] is an arithmetic progressions.
</p>

<p>
<b>test 3:</b> the only way to archive an airthmetic progressions is remove the number 7 which will give us [2, 4, 6, 8, 10].
</p>

