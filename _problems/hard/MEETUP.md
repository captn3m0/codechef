---
{"category_name":"hard","problem_code":"MEETUP","problem_name":"Meeting location","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"lg5293","problem_tester":"errichto","date_added":"13-03-2017","tags":{"0":"cook80","1":"divide","2":"hard","3":"interactive","4":"lg5293"},"editorial_url":"https://discuss.codechef.com/problems/MEETUP","time":{"view_start_date":1489949100,"submit_start_date":1489949100,"visible_start_date":1489949100,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/mandarin/MEETUP.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/russian/MEETUP.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/vietnamese/MEETUP.pdf">Vietnamese</a> as well.</h3>

<p> 
This is an interactive problem.
It means that every time you output something, you must finish with a newline character and flush the output.
For example, in C++ use the fflush(stdout) function, in Java — call System.out.flush(), in Python — sys.stdout.flush(), and in Pascal — flush(output).
Only after flushing the output will you be able to read from the input again.
</p>

<p>
Alice and Bob are taking a trip to Byteland.
The country can be modeled as an undirected graph with <b>n</b> cities and <b>m</b> bidirectional roads.
There are at most 1,000 cities, and between 0 and <b>n</b> * (<b>n</b>-1) / 2 roads.
The graph is not necessarily connected.
</p>

<p>
Alice likes visiting cities that are directly connected.
She chose <b>k<sub>a</sub></b> nodes that form a clique (i.e. every pair of cities has a direct road between them).
Bob on the other hand likes to visit cities that are not directly connected.
He chose <b>k<sub>b</sub></b> nodes that form an independent set of the graph (i.e. no pair of cities has a direct road between them).
</p>

<p>
Alice and Bob would like to know if their itineraries have any common cities.
This seemingly simple task is complicated by the fact that Alice and Bob have maps in different languages.
</p>

<p>
Alice’s map has the cities with names <b>a</b><sub>1</sub>, <b>a</b><sub>2</sub>, …, <b>a</b><sub><b>n</b></sub>.
Bob’s map has cities with names <b>b</b><sub>1</sub>, <b>b</b><sub>2</sub>, …, <b>b</b><sub><b>n</b></sub>.
These names are all distinct.
</p>

<p>
Luckily for you, the judge knows how to translate strings between the languages.
Formally, there is a hidden function f that the judge keeps such that for every i there exists a unique j such that f(<b>a</b><sub>i</sub>) = <b>b</b><sub>j</sub>, and <b>a</b><sub>p</sub>, <b>a</b><sub>q</sub> have a direct edge if and only if f(<b>a</b><sub>p</sub>),f(<b>a</b><sub>q</sub>) have a direct edge.
We will denote f<sup>-1</sup>(x) to denote the inverse of the function f.
Intuitively, f translates strings from language A to language B, and f<sup>-1</sup> translates them from language B to language A.
</p>

<p>
Translating words takes a lot of effort.
You would like to help Alice and Bob by translating as few as words as possible.
You can ask the judge what the value of f(<b>a</b><sub>i</sub>) is, or what the value of f<sup>-1</sup>(<b>b</b><sub>j</sub>) is.
You may only ask the judge at most 10 questions.
After asking questions, you must be able to determine if Alice and Bob will visit any common cities.
Formally, this means checking whether there exists a city <b>a</b><sub>i</sub> that Alice visits and a city <b>b</b><sub>j</sub> that Bob visits such that f(<b>a</b><sub>i</sub>) = <b>b</b><sub>j</sub>.
</p>


<h3>Input</h3>
<p>
The first line will contain four integers, <b>n, m, k<sub>a</sub>, k<sub>b</sub></b>.
Next will follow a description of a map in Alice's language, then a description of a map in Bob's language.
</p>

<p>
A map can be described as follows:
The first line contains n strings.
The first <b>k<sub>a</sub></b> (resp <b>k<sub>b</sub></b>) strings denote the cities that Alice (resp Bob) will visit.
The next <b>m</b> lines describe an undirected edge between two cities.
</p>

<h3>Interaction</h3>
<p>
To ask a question, print “A s” to denote you would like to know what f(s) is (s must be one of <b>a</b><sub>1</sub>, <b>a</b><sub>2</sub>, …, <b>a</b><sub><b>n</b></sub>).
Print “B s” to denote you would like to know what f<sup>-1</sup>(s) is (s must be one of <b>b</b><sub>1</sub>, <b>b</b><sub>2</sub>, …, <b>b</b><sub><b>n</b></sub>).
Don't forget to flush the question after printing it.
The judge will respond to the question by printing a string denoting the answer to your question.
You may ask at most 10 questions.
</p>

<p>
Once you are finished asking questions, and are ready to answer the main question of whether or not Alice and Bob will visit any common cities, print “C s”, where s is either “Yes” or “No” (note, this is case sensitive).
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>n</b> ≤ 1000</li>
<li>0 ≤ <b>m</b> ≤ <b>n</b> * (<b>n</b>-1) / 2</li>
<li>1 ≤ <b>k<sub>a</sub></b> ≤ <b>n</b></li>
<li>1 ≤ <b>k<sub>b</sub></b> ≤ <b>n</b></li>
</ul>
<p> 
The city names are all distinct and have between 1 and 10 characters, inclusive.
All city names consist of only lowercase letters.
It is guaranteed that the first <b>k<sub>a</sub></b> cities in Alice's map are a clique, and the first <b>k<sub>b</sub></b> cities in Bob's map are an independent set.
It is guaranteed that the maps described are isomorphic according to the hidden function f that the judge has.
</p>

<h3>Example</h3>
<pre>
<table border="1">
<tr>
<td>your program</td>     <td>the system</td>
</tr>

<tr><td></td><td>4 3 1 1
ab bc cd de
ab bc
bc cd
cd de
w y x z
x w
y x
y z</td></tr>

<tr><td>A cd</td><td></td></tr>

<tr><td></td><td>x</td></tr>
<tr><td>A bc</td><td></td></tr>

<tr><td></td><td>y</td></tr>
<tr><td>B x</td><td></td></tr>

<tr><td></td><td>cd</td></tr>
<tr><td>A ab</td><td></td></tr>

<tr><td></td><td>z</td></tr>
<tr><td>B w</td><td></td></tr>

<tr><td></td><td>de</td></tr>
<tr><td>C No</td><td></td></tr>
</table>
</pre>

<h3>Explanation</h3>
<p>Here, we have 4 cities and 3 roads. Alice's map has cities with labels "ab", "bc", "cd", "de". Bob's map has cities with labels "w", "y", "x", "z". Alice visits cities {"ab"}. Bob visits cities {"w"}. Here, we show an example of the interaction. The translation function in this case is "ab" = "z", "bc" = "y", "cd" = "x", "de" = "w". In this case, we can see that Alice and Bob don't visit any cities in common, so the final answer is No. </p>