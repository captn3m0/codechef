---
{"category_name":"hard","problem_code":"CHANGE","problem_name":"Making Change","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"anton_lunyov","date_added":"2-01-2013","tags":{"0":"advanced","1":"hard","2":"march13","3":"maths","4":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/CHANGE","time":{"view_start_date":1363000435,"submit_start_date":1363000435,"visible_start_date":1363000281,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef recently visited a strange land with strange currency.  One day Chef needed to make change to pay for an item with coins, and wondered how many ways it could be done, assuming an infinite supply of each type of coins.  Two ways are considered different if there is some coin that appears a different number of times in each sum.  The answer may be very large, so Chef only needs to know the remainder when the answer is divided by <b>1000000007</b> (<b>10<sup>9</sup> + 7</b>).</p>
<p>Chef noticed something curious about the currency in question: not only do all coins have different denominations, but no two denominations of coin share any common factor other than 1.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two space-separated integers <b>N</b> and <b>C</b>, denoting the number of different coin types and the desired total coinage, respectively. The second line contains <b>N</b> space-separated integers <b>D<sub>1</sub>, D<sub>2</sub>, ..., D<sub>N</sub></b>, denoting the denominations of the coins.</p>
<h3>Output</h3>
<p>For each test case, output on a separate line the number of ways to make the desired amount of change, modulo <b>1000000007</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>5</b></li>
<li><b>1</b> &le; <b>N</b> &le; <b>50</b></li>
<li><b>1</b> &le; <b>C</b> &le; <b>10<sup>100</sup></b></li>
<li><b>1</b> &le; <b>D<sub>i</sub></b> &le; <b>500</b></li>
<li>All <b>D<sub>i</sub></b> are pairwise distinct and pairwise relatively prime.</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3 16
3 4 5
2 2000000014
1 2
3 380134
23 5 2

<b>Output:</b>
4
1
314159265
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> There are 4 ways to make a total of 16 using coins with values 3, 4 and 5:
<ul>
<li>16 = 4 + 4 + 4 + 4</li>
<li>16 = 3 + 4 + 4 + 5</li>
<li>16 = 3 + 3 + 5 + 5</li>
<li>16 = 3 + 3 + 3 + 3 + 4</li>
</ul>
</p>
<p><b>Example case 2.</b> There are 1000000008 ways to make the desired change.  The remainder when divided by 1000000007 is 1.</p>
