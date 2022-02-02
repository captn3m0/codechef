---
{"category_name":"hard","problem_code":"VOGOZO","problem_name":"Vogon Zoo","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"yogesh01","problem_tester":null,"date_added":"26-12-2014","tags":{"0":"yogesh01"},"time":{"view_start_date":1422636277,"submit_start_date":1422636277,"visible_start_date":1422635400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> On the icy planet Zorg, the Vogons are putting together a zoo. One cage will house a collection of Kubudu dragons. Unlike the limited number of blood types found in other creatures, Kubudu dragons have a large variety of blood types. Each dragon’s blood type is ﬁxed when it is born and is given by a positive integer.</p>
<p>These blood types determine how the dragons interact with each other. Two dragons whose blood types are close to each other will quickly start ﬁghting and eventually destroy each other. At any given time, there is a threshold K such that it is safe to put two Kubudu dragons in the same cage only if their blood types diﬀer by K or more.</p>
<p>A batch of freshly hatched Kubudu dragons has arrived. Each dragon has had its blood tested and is tagged with its blood type. The Vogon zookeeper would like to determine the size of the largest collection of dragons from this batch that can safely be placed in a single cage. Given the dragons’ ﬁghting tendencies, this means that for each pair of dragons in the cage, their blood types should diﬀer by at least K.</p>
<p>For instance, suppose that K is 3 and there are 12 Kubudu dragons whose blood types are 1, 5, 6, 1, 8, 3, 12, 2, 13, 7, 9 and 11. From this batch, the maximum number of dragons that can be placed safely in the same cage is 4—for example, the dragons with blood types: 6, 12, 2 and 9.</p>
<p>You will be given the blood types of N Kubudu dragons and the threshold K. Your task is to compute the size of the largest group of dragons from this collection that can safely be placed in the same cage.</p>
<h3>Input</h3>
<p>The ﬁrst line of input has two space separated integers N and K, where N is the number of Kubudu dragons and K is the threshold below which they ﬁght, as described above. The second line of input consists of N space separated integers, the blood types of the N dragons.</p>
<h3>Output</h3>
<p>A single integer, the size of the largest collection of dragons that can be safely placed in the same cage.</p>
<p><strong>Test data</strong><br /> In all cases, 1 ≤ N ≤ 10<sup>6</sup>. In 30% of the inputs, 1 ≤ N ≤ 5000. The blood types of the dragons lie in the range 1 to 10<sup>7</sup><br />  </p>
<h3>
<p>Example</p>
</h3>
<pre> 
<b>Sample Input:</b> 
12 3 
1 5 6 1 8 3 12 2 13 7 9 11 

<b>Sample Output:</b>
 4<font face="sans-serif, Arial, Verdana, Trebuchet MS"><span style="white-space: normal;"> </span></font></pre>