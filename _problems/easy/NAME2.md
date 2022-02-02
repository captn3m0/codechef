---
{"category_name":"easy","problem_code":"NAME2","problem_name":"Your Name is Mine","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"pieguy","date_added":"27-03-2013","tags":{"0":"ad","1":"cakewalk","2":"kaushik_iska","3":"may13"},"editorial_url":"http://discuss.codechef.com/problems/NAME2","time":{"view_start_date":1368440969,"submit_start_date":1368440969,"visible_start_date":1368440969,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>In an attempt to control the rise in population, <strong>Archer</strong> was asked to come up with a plan. This time he is targeting marriages. Archer, being as intelligent as he is, came up with the following plan:</p>

<p>A man with name <strong>M</strong> is allowed to marry a woman with name <strong>W</strong>, only if <strong>M</strong> is a <a href="http://en.wikipedia.org/wiki/Subsequence">subsequence</a> of <strong>W</strong> or <strong>W</strong> is a subsequence of <strong>M</strong>.</p>

<p><strong>A</strong> is said to be a subsequence of <strong>B</strong>, if <strong>A</strong> can be obtained by deleting some elements of <strong>B</strong> without changing the order of the remaining elements.</p>

<p>Your task is to determine whether a couple is allowed to marry or not, according to Archer's rule.</p>

<h3>Input</h3>

<p>The first line contains an integer <strong>T</strong>, the number of test cases. <strong>T</strong> test cases follow. Each test case contains two space separated strings <strong>M</strong> and <strong>W</strong>.</p>

<h3>Output</h3>

<p>For each test case print <code>"YES"</code> if they are allowed to marry, else print <code>"NO"</code>. (quotes are meant for clarity, please don't print them)</p>

<h3>Constraints</h3>

<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>1 ≤ |M|, |W| ≤ 25000 (|A| denotes the length of the string A.)</b></li>
<li>All names consist of lowercase English letters only.</li>
</ul>

<h3>Example</h3>

<pre>
<b>Input:</b>
3
john johanna
ira ira
kayla jayla

<b>Output:</b>
YES
YES
NO
</pre>

<h3>Explanation</h3>

<p><strong>Case 1:</strong> Consider <strong>S = "johanna"</strong>. So, <strong>S[0] = 'j', S[1] = 'o', S[2] = 'h'</strong> and so on. If we remove the indices [3, 4, 6] or [3, 5, 6] from S, it becomes <strong>"john"</strong>. Hence <strong>"john"</strong> is a subsequence of <strong>S</strong>, so the answer is "YES".</p>

<p><strong>Case 2:</strong> Any string is a subsequence of it self, as it is formed after removing <strong>"0"</strong> characters. Hence the answer is <strong>"YES"</strong>.</p>

<p><strong>Case 3:</strong> <strong>"jayla"</strong> can not be attained from <strong>"kayla"</strong> as removing any character from <strong>"kayla"</strong> would make the string length smaller than <strong>"jayla"</strong>, also there is no <strong>'j'</strong> in <strong>"kayla"</strong>. Similar reasoning can be applied to see why <strong>"kayla"</strong> can't be attained from <strong>"jayla"</strong>. Hence the answer is "NO".</p>