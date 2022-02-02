---
{"category_name":"medium","problem_code":"BEAUTY","problem_name":"Beautiful Sandwich","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"7-06-2016","tags":{"0":"kingofnumbers"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/BEAUTY.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/BEAUTY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/BEAUTY.pdf">Vietnamese</a> as well.</h3>
<p>
Chef is going to participate in 'Who will prepare the most beautiful sandwich?' reality show. The show requires participants to prepare sandwiches that not only look beautiful, but taste delicious too. The show also releases a list of ingredients that you are allowed to use in the sandwich. This time, the list consists of <b>K</b> ingredients. For the purpose of our problem, you can assume that each ingredient is denoted by a lower case Latin character. So the first <b>K</b> lower case Latin letters will describe all the ingredients.</p>
<p>
Chef's sandwich consists of <b>N</b> parts of ingredients packed in a row. You can think of it as a string of length <b>N</b> containing the first <b>K</b> English letters only.</p>
<p>
Chef thinks the beauty of the sandwich is an integer that can be computed in the following way: </p>
<ul>
<li>First partition the sandwich into consecutive blocks of maximal length such that all the parts in the same block are of same ingredient.</li>
<li>Beauty of this sandwich is the sum of squared lengths of the blocks.</li>
</ul>

<p>
For example, let the sandwich be denoted by "aadddbabb".</p>
<ul>
<li>Chef partitions it in this way - aa, ddd, b, a, bb</li>
<li>Beauty of this sandwich is equal to 2*2 + 3*3 + 1*1 + 1*1 + 2*2 = 19</li>
</ul>

<p>
There will be <b>Q</b> judges in the show. Chef diligently worked for days in preparing <b>Q</b> such sandwiches before the show. Now, it is the show time. He just got an information from the back stage anchor that some of the judges are allergic to some ingredients. Now, Chef has to sit down and take out each sandwich and remove all the ingredients that the judge (the one who is supposed to taste it) is allergic to. After doing that, he will rearrange the parts of the sandwich continuously without leaving any ugly looking gap.
</p>
<p>
Now, Chef is worrying about the beauty of the sandwiches presented to various judges. He asks you to help in this.
</p>
<h3>Input</h3>
<p>The first line of the input contains two space separated integers <b>N</b> and <b>K</b>, denoting the number of parts in the sandwich and the number of available ingredients, respectively.</p>
<p>The second line contains a string of length <b>N</b> having only the first <b>K</b> Latin lower case letters, denoting the sandwich.</p>
<p>The third line contains a single integer <b>Q</b>, denoting the number of judges.</p>
<p>Each of the following <b>Q</b> lines contains a string denoting the ingredients to which the corresponding judge is allergic. The string will be sorted in ascending order of their characters. No character will appear more than once in it.</p>
<h3>Output</h3>
<p>For each query, output a single integer in a separate line denoting the beauty of the sandwich that the corresponding judge will be tasting.</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>N</b> ≤ <b>200,000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>18</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>262,143</b></li>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>7 4
acabada
2
b
ac
</tt>
<b>Output:</b>
<tt>8
2</tt>
</pre><h3>Explanation</h3>
<p><b>First</b> judge is allergic to ingredient denoted by 'b'. So Chef has to remove this ingredient from the judge's sandwich. After that, the sandwich will be "acaada". Its beauty will be 1*1 + 1*1 + 2*2 + 1*1 + 1*1 = 8
</p>
<p><b>Second</b> judge is allergic to ingredients denoted by characters 'a' and 'c'. After removing these ingredients, the sandwich will become "bd" and its beauty will be 2.
</p>

