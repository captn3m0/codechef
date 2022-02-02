---
{"category_name":"hard","problem_code":"CULPRO","problem_name":"Cultural Programme","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"yogesh01","problem_tester":null,"date_added":"13-11-2014","tags":{"0":"easy","1":"inpr1501","2":"yogesh01"},"time":{"view_start_date":1422551127,"submit_start_date":1422551127,"visible_start_date":1422551127,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Siruseri Welfare Association has organized a Cultural Programme for families in the area, to build up community spirit. The Cultural Programme is being held at the Siruseri Community Hall. Inside the hall, children perform songs and dances. Outside, local restau- rants have set up stalls selling snacks.</p>
<p>As is typical on such an occasion, members of the audience drift in and out of the hall during the programme. An observant office bearer of the Siruseri Welfare Association notes down the times at which people enter and leave the hall. Suppose that is N. He wants to know the maximum size of the audience was during the course of the programme. </p>
<p>For convenience, he writes down each time as a single integer - A<sub>i</sub>, the number of minutes from the start of the programme for the ith person. Also, the door of the hall is narrow, so at any time, either <b> one person </b> can enter or one person can leave the hall, but not both. Thus, each entry and exit time that is noted down is distinct.</p>
<p>For example, suppose the observations noted down are the following. Each line denotes the entry time and exit time of one person. (The identity of the person is not important—the same person may enter and leave the hall many times. For instance, in the example below, it might well be that the entries and exits recorded at Serial Nos 2 and 5 refer to the same person.)</p>
<p><img src="/download/extimages/b52370c3ee7ab763d0b6ce064ba40193.png" /></p>
<p>Your task is to read the list of entry and exit times and compute the <b> maximum size </b> of the audience during the programme.</p>
<h3><strong>Input</strong></h3>
<p>The first line of input is a single integer, N, the number of entries and exits recorded. This is followed by N lines of input. Each of these lines consists of two integers, separated by a space, describing one entry and exit. The first integer is the entry time and the second integer is the exit time..</p>
<h3><strong>Output</strong></h3>
<p>A single integer, denoting the maximum size of the audience during the performance.</p>
<h3><strong>Constraints</strong></h3>
<ul>
<li>1 ≤ N ≤ 10<sup>5</sup></li>
<li>1 ≤ A<sub>i</sub> ≤ 10<sup>7</sup></li>
</ul>
<p><b> </b></p>
<h3><b>Example</b></h3>
<p><b><b>Sample Input:</b> </b></p>
<p>5<br />
1 7<br />
2 4<br />
6 9<br />
3 8<br />
5 10</p>
<p><b><b>Sample Output:</b></b></p>
<p>4</p>
<p><b> </b></p>
