---
{"category_name":"medium","problem_code":"MTRICK","problem_name":"Magic Trick","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"yellow_agony","problem_tester":"gerald","date_added":"18-02-2012","tags":{"0":"easy","1":"jan14","2":"programming","3":"simple","4":"yellow_agony"},"editorial_url":"http://discuss.codechef.com/problems/MTRICK","time":{"view_start_date":1389605400,"submit_start_date":1389605400,"visible_start_date":1389605400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/MTRICK.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/MTRICK.pdf">Russian</a>.</h3>
<p>Vidhi went to a magic show last week where she was astounded by a magic trick performed by the great Mandwarf, the brown. His trick was as follows :

<ul>
    <li>
    Ask a volunteer from the audience to write down a list <b>L</b> of <b>N</b> integers. 
    </li>

    <li>
    Ask another volunteer from the audience to provide three integers <b>A</b>, <b>B</b>, <b>C</b>
    </li>

    <li>
    Ask another volunteer from the audience to provide <b>N</b> length string called <b>S</b> where each letter is either 'R', 'A' or 'M'
    </li>

    <li>
    Close his eyes for a split second and give the output of The Ancient Algorithm on this input. 
    </li>
</ul></p>

We all know that The Ancient Algorithm is as follows :
<pre>

for <b>i</b> from 1 to <b>N</b> do 

    if <b>i<sup>th</sup></b> letter of <b>S</b> is 'R'
        reverse <b>L</b>[<b>i</b>...<b>N</b>]
    else if <b>i<sup>th</sup></b> letter of <b>S</b> is 'A'
        add <b>A</b> to all numbers of <b>L</b>[<b>i</b>..<b>N</b>].
    else if <b>i<sup>th</sup></b> letter of <b>S</b> is 'M'
        multiply <b>B</b> to all numbers of <b>L</b>[<b>i</b>..<b>N</b>].

    for all number in <b>L</b>[<b>i</b>..<b>N</b>], module them by <b>C</b>.

    announce <b>L</b>[<b>i</b>] out loud

end

</pre>    


<p>Vidhi's boyfriend got jealous when he saw her getting impressed by Mandwarf, the brown's wisdom. He wants to learn the trick to gain her undivided admiration. How about you help him?

<h3>Constraints:</h3>
</p><p>1 ≤ <b>T</b> ≤ 100 <br />
1 ≤ <b>N</b> ≤ 1000<br />
0 ≤ <b>L</b>[<b>i</b>] ≤ 10<sup>18</sup><br />
0 ≤ <b>A</b>,<b>B</b> ≤ 10<sup>18</sup><br />
2 ≤ <b>C</b> ≤ 10<sup>18</sup><br />

<h3>Input</h3>
</p><p>First line contains a single integer <b>T</b>, denoting the number of test cases. Then follow <b>T</b> test case scenarios. Each test case begins with an integer <b>N</b>, the size of the list <b>L</b>. Then in next line, you'd find <b>N</b> space separated integers - the list <b>L</b> itself. In next line, there'd be three space separated integers <b>A</b>, <b>B</b>, <b>C</b> followed by string <b>S</b> in the next line. 

<h3>Output</h3>
</p><p>For each test case you've to output <b>N</b> space separated integers - the numbers announced by Mandwarf, the brown. 

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3
1 1 1
2 3 1000
ARM
4
1 2 3 4
0 1 1000
AMAM

<b>Output:</b>
3 3 9
1 2 3 4
</pre></p>