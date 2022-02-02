---
{"category_name":"easy","problem_code":"TWSTR","problem_name":"Remember the recipe","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"subra","date_added":"28-03-2012","tags":{"0":"easy","1":"kaushik_iska","2":"may12"},"editorial_url":"http://discuss.codechef.com/problems/TWSTR","time":{"view_start_date":1336723030,"submit_start_date":1336723030,"visible_start_date":1336728600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef Jessie has a lot of recipes with her <b>(N)</b>. She often remembered the starting few characters of the recipe and forgot the rest. As all the great chefs do, Jessie also numbered the recipes depending on the priority. So, given the list of recipes along with their priorities answer Jessie&rsquo;s queries.</p>

<p>Jessie&rsquo;s queries are as follows:<br />
She gives you the first few characters of a recipe; you have to print the complete recipe with the highest priority.</p>

<p><b>Note:</b><br />
Every recipe has a unique priority
</p>

<h3>Input</h3>
<p>
First line contains an integer<b> N</b> - the number of recipes.<br />
Followed by <b>N</b> strings <b>Si</b> along with an integer each <b>Vi</b>.<br />
<b>Si</b> stands for the recipe and <b>Vi</b> for the priority.<br />
It is followed by an integer <b>Q</b> - the number of queries.<br />
Followed by <b>Q</b> strings <b>Qi</b>.<br />
Each string <b>Si, Qi</b> contain only lowercase Latin alphabets ('a' - 'z') and <b>'-'</b>.<br />

<h3>Output</h3>
</p><p><b>Q</b> &ndash; lines, each contain the answer for each of the query.<br />
If for a query no recipe matches print <b>"NO"</b>. (Without quotes)</p>

<p><b>Constraints:</b></p>

<p>0 &lt;= <b>N</b> &lt;= 1000<br />

0 &lt;= <b>Q</b> &lt;= 1000<br />

-10^9 &lt;= <b>Vi</b> &lt;= 10^9<br />

1 &lt;= <b>|Si|</b> &lt;= 1000 (length of <b>Si</b>)<br />

1 &lt;= <b>|Qi|</b> &lt;= 1000 (length of <b>Qi</b>)</p>


<h3>Example</h3>

<pre>
<b>Input:</b>
4
flour-with-eggs 100
chicken-ham -10
flour-without-eggs 200
fish-with-pepper 1100
6
f
flour-with
flour-with-
c
fl
chik

<b>Output:</b>
fish-with-pepper
flour-without-eggs
flour-with-eggs
chicken-ham
flour-without-eggs
NO

</pre>