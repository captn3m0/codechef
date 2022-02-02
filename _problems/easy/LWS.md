---
{"category_name":"easy","problem_code":"LWS","problem_name":"Longest Weird Subsequence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"anton_lunyov","date_added":"29-07-2011","tags":{"0":"easy","1":"march12","2":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/LWS","time":{"view_start_date":1331461925,"submit_start_date":1331461925,"visible_start_date":1331458200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Finding the longest increasing subsequence is an old and well-known problem now. Here you will have to do something similar. You need to find the longest <i>weird</i> subsequence (LWS) of the given string. The subsequence is called <i>weird</i> if it can be split into two disjoint subsequences, one of which is non-decreasing and the other one is non-increasing. </p>

<p>Just for clarity, by subsequence of the given string <b>S</b> we mean any string that can be obtained from <b>S</b> by erasing from it zero or more characters. So empty string is a subsequence of any string and any string is a subsequence of itself. Further, note that we consider only strings composed of lowercase Latin letters and these letters compared by their ASCII codes. So, for example, 'a' is smaller than 'b' and 'p' is larger than 'h'. </p>

<p>Now let's consider some example. Let <b>S="aabcazcczba"</b>. Then <b>"abczz"</b> is its some non-decreasing subsequene, <b>"zccb"</b> is its some non-increasing subsequence and <b>"aabczcczba"</b> is its some weird subsequence since it can be split into non-decreasing subsequence <b>"aabzz"</b> and non-increasing subsequence <b>"cccba": "AABcZccZba"</b> (first subsequence is shown by capital letters just for calrity). </p>


<h3>Input</h3>
<p>The first line contains a single positive integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a non-empty string <b>S</b> composed of lowercase Latin letters. 

<h3>Output</h3>
</p><p>For every test case, output the length of the LWS of the given string. </p>

<h3>Constraints</h3>
<pre>
1 ≤ <b>T</b> ≤ 10
1 ≤ length of <b>S</b> ≤ 2000

</pre>

<h3>Example</h3>

<pre>
<b>Input</b>
3
abc
cbazyzabc
ddaabbaacc

<b>Output</b>
3
6
10

</pre>

<h3>Explanation</h3>

<p><b>First case:</b> The string itself is LWS since it can be split into non-decreasing subsequence <b>"abc"</b> and non-increasing empty subsequence.</p>

<p><b>Second case:</b> One of the possible LWS is <b>"cbaabc"</b> since it can be split as <b>"cbaABC"</b>. Here we indicate by capital letters non-decreasing subsequence and by lowercase letters non-increasing one. Other possible LWS's are <b>"cbaZZa", "AzyaBC"</b>.</p>

<p><b>Third case:</b> Here the desired splitting is <b>"ddAABBaaCC"</b>.</p>