---
{"category_name":"medium","problem_code":"CSUBSEQ","problem_name":"Chef and Chefness","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"wwwwodddd","date_added":"3-02-2018","tags":{"0":"cook91","1":"dynamic","2":"medium","3":"mgch"},"editorial_url":"https://discuss.codechef.com/problems/CSUBSEQ","time":{"view_start_date":1518978600,"submit_start_date":1518978600,"visible_start_date":1518978600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/mandarin/CSUBSEQ.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/russian/CSUBSEQ.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/vietnamese/CSUBSEQ.pdf">Vietnamese</a> as well.</h3>

<p>Chef has a string <b>S</b> with length <b>N</b>. As Chef really likes his name, he defines the <i>chefness</i> of a string as the number of ways to find the string "chef" as a subsequence in <b>S</b>; formally, it's the number of ways to choose four indices <b>i</b>, <b>j</b>, <b>k</b>, <b>l</b> such that <b>S<sub>i</sub></b> = 'c', <b>S<sub>j</sub></b> = 'h', <b>S<sub>k</sub></b> = 'e', <b>S<sub>l</sub></b> = 'f' and 1 ≤ <b>i</b> ≤ <b>j</b> ≤ <b>k</b> ≤ <b>l</b> ≤ <b>N</b>. For example, the chefness of "chehefc" is 3 (with subsequences given by indices (1, 2, 3, 6), (1, 2, 5, 6), (1, 4, 5, 6)).</p>

<p>Chef perfectly understands that people really don't like strings with chefness greater than <b>K</b>. Therefore, he wants to erase a number of characters (possibly zero) from <b>S</b> in order to obtain a string with chefness <b>equal to K</b>. Help him compute the minimum number of characters he has to erase in order to achieve that!</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b>.</li>
<li>The second line contains a string <b>S</b> with length <b>N</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the minimum number of characters that need to be erased from <b>S</b> in order to obtain a string with chefness <b>K</b>, or -1 if it's impossible.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>K</b> ≤ 32</li>
<li>each character in <b>S</b> is one of the letters 'c', 'h', 'e', 'f'</li>
<li>1 ≤ <b>N</b> ≤ 256</li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 256</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

5
7 3
chehefc
8 4
chehefch
19 24
ccccchhhhheeeeeffff
20 5
echhhfhfcecfhechfcch
99 27
ffhffhffcfechchccccfhhhfhhhhhhehhhehhhhheeeeefeeeeeeheeheeeeffcfffffffffffhffffchffeffcefefhhfcehfe

<b>Output:</b>

0
-1
9
3
9
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> The chefness of <b>S</b> is already equal to 3, hence it's enough to erase nothing.</p>

<p><b>Example case 2:</b> Chefness is again equal to 3, but it's impossible to achieve chefness 4.</p>

<p><b>Example case 3:</b> Chefness 24 can be achieved by erasing 4 letters 'c', 3 letters 'h' and 2 letters 'e'.</p>
