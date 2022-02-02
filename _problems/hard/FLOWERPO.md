---
{"category_name":"hard","problem_code":"FLOWERPO","problem_name":"Flower Pots","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"8-08-2017","tags":{"0":"admin3"},"time":{"view_start_date":1503048600,"submit_start_date":1503048600,"visible_start_date":1503048600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/mandarin/FLOWERPO.pdf">mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/russian/FLOWERPO.pdf">russian</a>.</h3>

<p>The Chef wants to celebrate Independence Day with fireworks. He's particularly fond of Flower Pot crackers (or Fountain fireworks) which spew out fire around them:</p>

<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/AUG17/FLOWERPO.png" height="300"/>
<p></p>

<p>He's decided that he wants a row of <b>N</b> of these crackers. He has decided where exactly each of them will be placed. In particular, we can say that the crackers will be on a line with coordinates <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>.</p>

<p>These crackers come in many <i>strengths</i>. For any integer S ≥ 0, unlimited number of crackers of strength S are available for sale at the shop. The larger the strength of a cracker, the higher and wider it will spew fire. In particular, a cracker whose strength is s, and which is placed at coordinate X will spew fire everywhere in the interval [X - S, X + S], both end points inclusive. The cost of a cracker of strength S is S<sup>2</sup>.</p>

<p>Chef wants to decide what the strengths of each of the <b>N</b> crackers should be. He wants to light up only one of the <b>N</b> crackers, the <b>C</b>-th one, which is as coordinate <b>A<sub>C</sub></b>. The other <b>N</b> - 1 crackers should light up automatically. That is, suppose the cracker at <b>A<sub>C</sub></b> has a strength of S<sub><b>C</b></sub>, then it will light up any unlit cracker in the interval [<b>A<sub>C</sub></b> - S<sub><b>C</b></sub>, <b>A<sub>C</sub></b> + S<sub><b>C</b></sub>]. And these should then explode and light up more crackers, etc. This should continue until all the crackers are lit. Also, each cracker, once lit, takes 1 second to explode. Once it explodes, it instantaneously lights up all the unlit crackers in its interval. And Chef wants all the crackers to be lit up (not necessarily explode) within <b>B</b> seconds after he has lit <b>A<sub>C</sub></b>. That is, if a cracker is lit up <b>B</b> seconds after he has lit <b>A<sub>C</sub></b>, even though it has not exploded, Chef is happy with it, and it is valid.</p>

<p>Find out the minimum amount Chef has to spend in buying the crackers so as to achieve his goals.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each testcase contains three integers, <b>N</b>, <b>B</b> and <b>C</b>, which denote the number of crackers, the time within which all the crackers should be lit up, and the index of the cracker which he will light up, respectively.</li>
<li>The next line contains <b>N</b> integers: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing a single integer which should be the minimum total cost.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>1 ≤ <b>N</b> ≤ 3000</li>
<li>1 ≤ <b>B</b> ≤ 3000</li>
<li>1 ≤ <b>C</b> ≤ <b>N</b></li>
<li>1 ≤ <b>N</b> * <b>B</b> ≤ 30000</li>
<li>1 ≤ <b>A<sub>1</sub></b> < <b>A<sub>2</sub></b> < ... < <b>A<sub>N</sub></b>  ≤ 10<sup>8</sup></li>
</ul>


<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1</b> (20 points) : <b>C</b> = 1</li>
<li><b>Subtask 2</b> (80 points) : Original constraints</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
1
5 2 4
2 4 10 15 18

<b>Output:</b>
89
</pre>

<h3>Explanation</h3>
<p>One optimal way is to choose the strengths of the crackers as (0, 0, 8, 5, 0). That is, the leftmost cracker has strength 0, the next has 0, the next has 8, etc. Now, Chef lights up the 4-th cracker.</p> 

<p>After 1 second, it explodes and it lights up all the unlit crackers in its interval. Because its strength is 5, its interval would be [15 - 5, 15 + 5] = [10, 20]. So after 1 second, the third and fifth cracker are also lit.</p>

<p>After one more second (ie. 2 seconds from when Chef lit up the 4- cracker), those two explode. Because the fifth's strength is 0, it doesn't affect anything else. But the third cracker's strength is 8, and hence it lights up all unlit crackers in the interval [10 - 8, 10 + 8] = [2, 18]. Note that this includes all the crackers. Hence all the unlit crackers are lit up instantaneously, and so all the five crackers have been lit within 2 seconds of Chef lighting up the one cracker. Thus this is a valid configuration. Also note that the first and second crackers have only been lit, and they are yet to explode. But that is fine.</p>

<p>The total cost of this is 0<sup>2</sup> + 0<sup>2</sup> + 8<sup>2</sup> + 5<sup>2</sup> + 0<sup>2</sup> = 89. You cannot get a lower cost, and hence this is the answer.</p>