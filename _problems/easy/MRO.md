---
{"category_name":"easy","problem_code":"MRO","problem_name":"Method Resolution Order","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":null,"date_added":"25-11-2017","tags":{"0":"acm17chn","1":"chn17rol","2":"dynamic","3":"easy","4":"wittyceaser"},"editorial_url":"https://discuss.codechef.com/problems/MRO","time":{"view_start_date":1515357000,"submit_start_date":1515357000,"visible_start_date":1515357000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Zotlin is an object-oriented programming language that provides features such as <b>Classes</b> and <b>Functions</b>. Zotlin also has the following features:</p>
<ul>
<li>A function with the same name and same declarations can have different implementations in different classes.</li>
<li>Each class can inherit zero or more classes (excluding itself). If <b>Class A</b> inherits <b>Class B</b>, we say that <b>Class A</b> is a <em>child</em> of <b>Class B</b>.</li>
<li>A class cannot inherit another class if a cycle is formed by inheritance.</li>
</ul>

<p></p>
<p>For example, if Class A inherits Class B and Class B inherits Class C, then Class C cannot inherit Class A.</p>

<p>A Class X is called an ancestor of Class Y, if Y inherits directly or indirectly from Class X. ie, say Class Y inherits from Class Z, which inherits from Class X. Then Class X is an ancestor of both Class Y and Class Z.</p>
<p></p>

<p>Mr. Zourist — a very popular programmer — wrote a program in Zotlin with <b>N</b> classes numbered from <b>1</b> to <b>N</b>. Some of these classes have an implementation of a function <b>F</b>. The Zotlin compiler needs to determine which definition of function <b>F</b> should be called for an object of <b>Class 1</b>.</p>
<p>In order to deterministically decide which implementation of function <b>F</b> to use, the compiler uses a list called the <b>Resolution Order</b> <em>(RO list)</em>. This is a list containing <b>Class 1</b> and its ancestors. The compiler iterates through this list to search for a class that contains an implementation of function <b>F</b>.</p>
<p>The properties of an RO list are as follows:</p>
<ul>
<li>The 1st member of the list is <b>Class 1</b>.</li>
<li>The list contains only the ancestors of Class 1. All the Classes in the list are unique.</li>
<li>It is guaranteed that <b>no Class occurs after any of its ancestors </b>in the list.</li>
</ul>

<p></p>

<p>Let's define the <em><b>Special RO list</b></em> as an RO list of length <b>N</b> where the <b>i<sup>th</sup></b> member in the list is <b>Class i</b>. That is, the Special RO list is <b>[1, 2, 3, ... , N]</b>.</p>
<p>Find out the number of distinct class-inheritance hierarchies Mr. Zourist could have created in his program for which one of the valid RO lists is the <em>Special RO list</em>. Print your output modulo 10<sup>9</sup> + 7.</p>

<p>
    Two class-inheritance hierarchies are considered different if they have at least one class that inherits a different list of classes.
</p>

<h3>Input</h3>
<p>The first line of input contains a positive integer <b>T</b> - denoting the total number of testcases.</p>
<p><b>T</b> lines follow - the <b>i<sup>th</sup></b> line contains a single positive integer <b>N</b>- denoting the number of classes written by Mr. Zourist.</p>
<p></p>

<h3>Output</h3>
<p>For each testcase, print the required number of distinct class-inheritance hierarchies modulo <b>10<sup>9</sup> + 7</b> on a new line.</p>
<p></p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<b>Input</b><pre>
2
3
6

<b>Output</b>
3
9765
</pre>

<p></p>

<h3>Explanation</h3>
<p><b>Explanation for testcase 1:</b></p>
<p>Let "class X" denote that X does not inherit any class</p>
<p>Let "class X(Y)" denote that X inherits Y</p>
<p>Let "class X(Y, Z)" denote that X inherits Y, Z</p>
<p></p>
<p><b>First possibility:</b>
<pre>
class 2
class 3
class 1(2, 3)
</pre>
</p>

<p><b>Second possibility:</b>
<pre>
class 3
class 1(2)
class 2(3)
</pre>
</p>

<p><b>Third possibility:</b>
<pre>
class 3
class 1(2, 3)
class 2(3)
</pre>
</p>
<p>These are the three valid class-inheritance hierarchies, and hence the answer is 3.</p>
<p>
    Note that the following hierarchy is not valid:
    <pre>
        class 1(2)
        class 2
        class 3
    </pre>
    This is because 3 should have been an ancestor of 1, but in the above hierarchy, 3 is a stand-alone class.
</p>