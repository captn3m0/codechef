---
{"category_name":"medium","problem_code":"ADDMULT","problem_name":"To add or to multiply game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"errichto","date_added":"20-10-2016","tags":{"0":"ad","1":"cook79","2":"game","3":"kingofnumbers","4":"medium"},"editorial_url":"https://discuss.codechef.com/problems/ADDMULT","time":{"view_start_date":1487529000,"submit_start_date":1487529000,"visible_start_date":1487529000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/mandarin/ADDMULT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/russian/ADDMULT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/vietnamese/ADDMULT.pdf">Vietnamese</a> as well.</h3>

<p>Chef and his brother Chefu are playing a game with a sequence of <b>N</b> integers.</p>

<p>They take alternate turns to play. In each turn, the player should choose two adjacent integers from the sequence, remove them, and put in their place either their sum or their product. So if the sequence is <b>(5,17,2,4,102)</b>, then one valid move would be to select <b>2</b> and <b>4</b>, and replace them with their product, which is <b>8</b>. So the sequence now becomes <b>(5,17,8,102)</b>. They could also have been replaced by their sum, and in that case, the new sequence would become <b>(5,17,6,102)</b>.</p>

<p>The game continues until there's only one integer left in the sequence. If this integer is even, then Chef is the winner, otherwise Chefu is the winner.</p>

<p>Given the initial sequence and the player who will play the first turn, you should tell who is going to win the game assuming that both of them play optimally.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>

<p>First line of each test-case contains <b>N</b>, the length of the initial sequence. and a string which is either "Chef" or "Chefu" denoting who will play first.</p>

<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the initial sequence.
 </p>


<h3>Output</h3>
<p>For each test case, output a single line containing who will win the game: "Chef" or "Chefu".</p>


<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10,000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000</b></li>
<li>sum of <b>N</b> in all test-cases will not exceed <b>100,000</b></li>
<li><b>1</b> ≤  <b>A<sub>i</sub> </b> ≤ <b>50</b>
</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1 Chef
8
3 Chef
1 2 3

<b>Output:</b>
Chef
Chefu
</pre>

<h3>Explanation</h3>
<p><b>Test case 1:</b> The game stops as soon as it begins, because there is only one integer, and because it is even, Chef wins.</p>

<p><b>Test case 2:</b> Chef has 4 valid first moves:
<ul>
<li>Add 1 and 2, and change the sequence to (3,3). Now Chefu will multiply these two, and get 9, and win, because only one integer is left, and it is odd.</li>
<li>Multiply 1 and 2, and change the sequence to (2,3). Now Chefu will add these two, and get 5, and win, because only one integer is left, and it is odd.</li>
<li>Add 2 and 3, and change the sequence to (1,5). Now Chefu will multiply these two, and get 5, and win, because only one integer is left, and it is odd.</li>
<li>Multiply 2 and 3, and change the sequence to (1,6). Now Chefu will add these two, and get 7, and win, because only one integer is left, and it is odd.</li>
</ul>
</p>

<p>
As we can see, for every possible move of Chef, Chefu has a move that lets him win. Hence, in optimal play, Chefu will win.
</p>