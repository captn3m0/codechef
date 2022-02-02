---
{"category_name":"easy","problem_code":"DIVIDING","problem_name":"Dividing Stamps","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"gerald","date_added":"24-02-2014","tags":{"0":"cakewalk","1":"cook44","2":"kostya_by","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/DIVIDING","time":{"view_start_date":1395599400,"submit_start_date":1395599400,"visible_start_date":1395599400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DIVIDING/mandarin/DIVIDING.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DIVIDING/russian/DIVIDING.pdf">Russian</a> as well.</h3>
<p>
Are you fond of collecting some kind of stuff? Mike is crazy about collecting stamps. He is an active member of <i>Stamp Collecting Сommunity</i>(SCC).
</p>
<p>
SCC consists of <b>N</b> members which are fond of philately. A few days ago Mike argued with the others from SCC. Mike told them that all stamps of the members could be divided in such a way that <b>i</b>'th member would get <b>i</b> postage stamps. Now Mike wants to know if he was right. The next SCC meeting is tomorrow. Mike still has no answer.
</p>
<p>
So, help Mike! There are <b>N</b> members in the SCC, <b>i</b>'th member has <b>C<sub>i</sub></b> stamps in his collection. Your task is to determine if it is possible to redistribute <b>C<sub>1</sub></b> + <b>C<sub>2</sub></b> + ... + <b>C<sub>n</sub></b> stamps among the members of SCC thus that <b>i</b>'th member would get <b>i</b> stamps.
</p>
<h3>Input</h3>
<p>The first line contains one integer <b>N</b>, denoting the number of members of SCC.</p>
<p>The second line contains <b>N</b> integers <b>C<sub>i</sub></b>, denoting the numbers of the stamps in the collection of <b>i</b>'th member.</p>
<h3>Output</h3>
<p>The first line should contain <b>YES</b>, if we can obtain the required division, otherwise <b>NO</b>.
</p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b> ≤ 100 000;</p>
<p>1 ≤  <b>C<sub>i</sub></b> ≤ 10<sup>9</sup>.</p>
<h3>Examples</h3>
<pre><b>Input:</b>
5
7 4 1 1 2

<b>Output:</b>
YES
</pre><p><br /></p>
<pre><b>Input:</b>
5
1 1 1 1 1

<b>Output:</b>
NO
</pre>
