---
{"category_name":"easy","problem_code":"CLPERM","problem_name":"Chef and A Large Permutation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"shiplu","date_added":"28-09-2014","tags":{"0":"jan15","1":"ma5termind","2":"maths","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/CLPERM","time":{"view_start_date":1421055000,"submit_start_date":1421055000,"visible_start_date":1421055000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/CLPERM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/CLPERM.pdf">Russian</a>.</h3>
<p>Today is Chef's birthday. His mom gifted him a truly lovable gift, a permutation of first <b>N</b> positive integers.</p>
<p>She placed the permutation on a very long table in front of Chef and left it for him to play with it. But as there was a lot of people coming and wishing him. It was interfering with his game which made him very angry and he banged the table very hard due to which <b>K</b> numbers from the permutation fell down and went missing.</p>
<p>Seeing her son's gift being spoilt, his mom became very sad. Chef didn't want his mom to be sad as he loves her the most. So to make her happy, he decided to play a game with her with the remaining <b>N - K</b> numbers on the table. Chef wants his mom to win all the games.</p>
<p>Chef and his mom play alternatively and optimally. In <b>Xth</b> move, a player can choose some numbers out of all the numbers available on the table such that chosen numbers sum up to <b>X</b>. After the move, Chosen numbers are placed back on the table.The player who is not able to make a move loses.</p>
<p>Now, Chef has to decide who should move first so that his Mom wins the game.</p>
<p>As Chef is a small child, he needs your help to decide who should move first. Please help him, he has promised to share his birthday cake with you :)</p>
<h3>Input</h3>
<ul>
<li>First Line of input contains a single integer <b>T</b> denoting the number of test cases. </li>
<li>First line of each test case contains two space separated integers <b>N</b> and <b>K</b> denoting the size of<br />
 permutation and number of numbers fall down from the table. </li>
<li>Next line of each test case contains <b>K</b> space separated integers denoting the values of missing numbers.</li>
</ul>
<h3>Output</h3>
<p>For each test case, print <b>"Chef"</b> if chef should move first otherwise print <b>"Mom"</b> (without quotes).</p>
<h3>Constraints</h3>
<ul>
<li> <b>1 ≤ T ≤ 10<sup>5</sup>, 1 ≤ N ≤ 10<sup>9</sup></b></li>
<li><b>0 ≤ K ≤ min(10<sup>5</sup>, N)</b></li>
<li>All <b>K</b> numbers are distinct.</li>
<li>Value of each of <b>K</b> number belongs to <b>[1,N]</b>.</li>
<li>Sum of <b>K</b> over all the test cases does not exceed <b>5*10<sup>5</sup>.</b></li>
</ul>
<h3>Scoring</h3>
<ul>
<li>Subtask 1 (13 pts): 1  ≤  <b>T</b>  ≤  100, 1  ≤  <b>N</b>  ≤   10<sup>2</sup>, 1  ≤  K &lt; N. </li>
<li>Subtask 2 (17 pts): 1  ≤  <b>T</b>  ≤  100, 1  ≤  <b>N</b>  ≤   10<sup>5</sup>, K = 0. </li>
<li>Subtask 3 (70 pts): Original Constraints. </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input</b>
2
5 2
3 5
5 1
1
<b>Output</b>
Mom
Chef
</pre><h3>Explanation</h3>
<p>For test case 1.</p>
<ul>
<li> Mom can choose {1} to make 1.</li>
<li> Chef can choose {2} to make 2.</li>
<li> Mom can choose {1,2} to make 3.</li>
<li> Chef can choose {4} to make 4.</li>
<li> Mom can choose {1,4} to make 5.</li>
<li> Chef can choose {2,4} to make 6.</li>
<li> Mom can choose {1,2,4} to make 7.</li>
<li> Chef cannot make 8 out of the numbers on the table.</li>
</ul>
<p> So,Chef loses and Mom wins.
 </p>
