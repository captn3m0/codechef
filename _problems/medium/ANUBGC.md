---
{"category_name":"medium","problem_code":"ANUBGC","problem_name":"Book Game with Chef","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":null,"date_added":"5-03-2014","tags":{"0":"anudeep2011","1":"cook46","2":"dynamic","3":"easy"},"editorial_url":"http://discuss.codechef.com/problems/ANUBGC","time":{"view_start_date":1400437800,"submit_start_date":1400437800,"visible_start_date":1400437800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/mandarin/ANUBGC.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/russian/ANUBGC.pdf">Russian</a> as well.</h3>
<h3>Statement</h3>
<p>Chef gives you a book with <b>N</b> pages. The pages are numbered from <b>1</b> to <b>N</b>.</p>
<p>Chef randomly selects a <b>Secret Digit</b> from <b>0</b> to <b>9</b>. Now he asks you to open one page of the book without looking at the book. You win the game if that page number contains the <b>Secret Digit</b>. For example if the <b>Secret Digit</b> is 8, then 8, 80, 1238213, 98 are all winning pages and 9, 90, 1239123 are loosing pages.</p>
<p>What is the probability of winning, if both Chef's choice and your choice has uniform distribution?</p>
<h3>Input</h3>
<p>The first line of input contains integer <b>T</b>, denoting the number of test cases.</p>
<p>Each test case consists of a single line with integer <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case, output the required probability <b>P/Q</b>. <b>P/Q</b> is an irreducible fraction.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>17</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
5

<b>Output:</b>
1/10
1/10
</pre><p> </p>
<h3>Explanation</h3>
<p>Chef can choose any <b>Secret Digit</b> from <b>0</b> to <b>9</b>. But you can only open page with number <b>1</b>. Probability that the <b>Secret Digit</b> is <b>1</b> after you opened the page with number <b>1</b> is <b>1/10</b>.</p>
