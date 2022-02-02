---
{"category_name":"easy","problem_code":"WSITES01","problem_name":"Blocked websites","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ismagilov","problem_tester":null,"date_added":"4-05-2017","tags":{"0":"ismagilov","1":"long","2":"may17"},"editorial_url":"https://discuss.codechef.com/problems/WSITES01","time":{"view_start_date":1495099800,"submit_start_date":1495099800,"visible_start_date":1495099800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MAY17/mandarin/WSITES01.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/russian/WSITES01.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/vietnamese/WSITES01.pdf">vietnamese</a> as well.</h3>


<p>Mike is a network administrator in a university. One of his primary responsibilities in the job is to create an effective firewall so that the students are not able to visit the blocked sites in the network.</p>

<p>The network have access to exactly <b>N</b> sites. Some of these can be blocked. The names of the sites will be given in lowercase English letters. </p>

<p>The firewall will consist of several filters. A filter is a string that should be a prefix of some blocked site, and it should not be a prefix of any unblocked site. You want to minimize the sum of length of filters in the firewall so that for each of the blocked site, there should be a filter that contains the name of blocked site(filter is a prefix of blocked site).</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of sites in the network.</p>
<p>Then <b>N</b> lines follow, each of them describes the site. Each line starts from the char <b>С</b>. If the site is unblocked, <b>С</b> is equal to '+', otherwise <b>С</b> is equal to '-'., followed by a string denoting the name of the site.</p>

<h3>Output</h3>
<p>If it is not possible to choose set of filters and satisfy all constraints, output a single line containing an integer -1.</p>
<p>Otherwise, in the first line print the number of filters K in the firewall. Then print <b>K</b> lines, in each line print the chosen filter. Please dislpay them in <a href="https://en.wikipedia.org/wiki/Lexicographical_order"> lexicographical order</a>. You can prove that answer will be unique.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 2 * 10<sup>5</sup></li>
<li>The sum of lengths of names of sites does not exceed 2*10<sup>5</sup></li>
<li>No two sites have same name.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (30 points)</b> 1 ≤ <b>N</b>, the sum of lengths of names of sites  ≤ 3 * 10<sup>3</sup></b></li>
<li><b>Subtask #2 (70 points)</b> Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
- codeforces
+ codechef
- youtube
+ google

<b>Output:</b>
2
codef
y
</pre>

<h3>Explanation</h3>
<p>You can see that the filter "codef" is a prefix of the blocked site "codeforces", but not a prefix of approved sites "codechef" and "google". Similarly, filter "y" is also a prefix of blocked site "youtube", but not a prefix of the approved sites. You can also see that there exists at least one filter for both the blocked sites "codeforces" and "youtube".</p>