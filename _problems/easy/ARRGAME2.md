---
{"category_name":"easy","problem_code":"ARRGAME2","problem_name":"Yet Another Nice Girl","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ballon_ziq","problem_tester":"shangjingbo","date_added":"2-08-2013","tags":{"0":"ballon_ziq","1":"easy","2":"oct13","3":"probability","4":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/ARRGAME2","time":{"view_start_date":1381743000,"submit_start_date":1381743000,"visible_start_date":1381743000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/ARRGAME2.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>Little Chef doesn't love math anymore. He loves Aleksandra.
</p>
<p> 
Sashen'ka is nice. They spend all the time together. Even their birthdays they are celebrating together, because they were born on the same day :)
</p>
<p>
And now, this day is coming...
</p>
<p>
Chef know that most of all Sasha loves numbers, that's why he bought <b>N</b> positive numbers to a girl.
From her side, Sasha as all girls, thought that if she likes something, then all people like that too. And bought to a boy <b>N</b> numbers too. xD
After all greeting young people decide to play a game with their gifts. The game will be continued for <b>N </b>turns, in each turn the following will be done:
<li>Chef randomly choose some number <b>x</b> from his gift.</li>
<li>Sasha randomly choose some number <b>y</b> form her gift.</li>
<li>If <b>x<sup>y</sup> > y<sup>x</sup></b> then girl will kiss fellow.</li>
<li>Numbers <b>x,y</b> will be discarded from gifts.</li>
Now chef is wondering what is the expected number of times he will be kissed by Sasha ?
</p>
<p> </p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of numbers in each gift. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the numbers Sasha gave to Chef. Next line describe <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, ..., <b>B<sub>N</sub></b> numbers boy gave to girl in the same way. </p>

<p> </p>

<h3>Output</h3>
For each test case, output a single line containing answer for corresponding test. Your answer will be considered as correct if it will have absolute error not more then <b>10<sup>-6</sup></b>.
<p> </p>

<h3>Constraints</h3>

<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>


<p> </p>
<h3>Example</h3>
<pre>
<b>Input</b>
3
1
3
4
2
2 3
1 4
2
2 4
2 2

<b>Output:</b>
1.000000
1.500000
0.000000


</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Game will have only 1 turn. Chef will choose 3, while Sasha will choose 4. Since 3<sup>4</sup>>4<sup>3</sup> girl will kiss boy. Hence answer is 1. </p>