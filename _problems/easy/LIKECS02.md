---
{"category_name":"easy","problem_code":"LIKECS02","problem_name":"Statistics Construction","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"likecs","problem_tester":"kingofnumbers","date_added":"8-09-2017","tags":{"0":"construction","1":"cook86","2":"easy","3":"likecs","4":"likecs"},"editorial_url":"https://discuss.codechef.com/problems/LIKECS02","time":{"view_start_date":1505673000,"submit_start_date":1505673000,"visible_start_date":1505673000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/mandarin/LIKECS02.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/russian/LIKECS02.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/vietnamese/LIKECS02.pdf">Vietnamese</a> as well.</h3>

<p>Chef Tobby asked Bhuvan to brush up his knowledge of statistics for a test. While studying some distributions, Bhuvan learns the fact that for symmetric distributions, the <a href="https://en.wikipedia.org/wiki/Mean">mean</a> and the <a href="https://en.wikipedia.org/wiki/Median">median</a> are always the same.</p>

<p>Chef Tobby asks Bhuvan out for a game and tells him that it will utilize his new found knowledge. He lays out a total of 10<sup>9</sup> small tiles in front of Bhuvan. Each tile has a distinct number written on it from <b>1</b> to <b>10<sup>9</sup></b>.</p>

<p>Chef Tobby gives Bhuvan an integer <b>N</b> and asks him to choose <b>N distinct tiles</b> and arrange them in a line such that the mean of median of all subarrays lies between <b>[N-1, N+1]</b>, both inclusive. The median of subarray of even length is the mean of the two numbers in the middle after the subarray is sorted</p>

<p>Bhuvan realizes that his book didn’t teach him how to solve this and asks for your help. Can you solve the problem for him?</p>

<p>In case, no solution exists, print <b>-1</b>.</p>

<h3>Input section</h3>
<p>First line contains, <b>T</b>, denoting the number of test cases.</p>

<p>Each of the next <b>T</b> lines, contain a single integer <b>N</b>.</p>

<h3>Output section</h3>
<p>If no solution, exists print <b>-1</b>.</p>

<p>If the solution exists, output <b>N</b> space separated integers denoting the elements of the array <b>A</b> such that above conditions are satisfied. In case, multiple answers exist, you can output any one them.</p>

<h3>Input constraints</h3>
<pre>
1 ≤ T ≤ 20
1 ≤ N ≤ 100
</pre>

<h3>Sample Input</h3>
<pre>
3
1
2
3
</pre>

<h3>Sample Output</h3>
<pre>
1
1 2
1 2 3
</pre>

<h3>Explanation</h3>
<p>For test case <b>3</b>, the subarrays and their median are as follows: </p>

<ol>
<li><b>{1}</b>, median = <b>1</b></li>
<li><b>{2}</b>, median = <b>2</b></li>
<li><b>{3}</b>, median = <b>3</b></li>
<li><b>{1, 2}</b>, median = <b>1.5</b></li>
<li><b>{2, 3}</b>, median = <b>2.5</b></li>
<li><b>{1, 2, 3}</b>, median = <b>2</b></li>
</ol>
<p>The mean of the medians is <b>2</b> which lies in the range <b>[2, 4]</b></p>