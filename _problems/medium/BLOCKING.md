---
{"category_name":"medium","problem_code":"BLOCKING","problem_name":"Block Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":"laycurse","date_added":"26-06-2012","tags":{"0":"aug12","1":"graph","2":"matching","3":"shangjingbo"},"editorial_url":"http://discuss.codechef.com/problems/BLOCKING","time":{"view_start_date":1344676996,"submit_start_date":1344676996,"visible_start_date":1344677400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>In the magic land, there is a smart but naughty boy Crane.

Crane has <strong>n</strong> houses, and <strong>n</strong> friends (both numbered from 1 to <strong>n</strong>).
Crane's mother has scheduled a plan for all his friends
such that each friend visits each house of Crane <strong>exactly once</strong>
at a different time, i.e.,
there is at most one friend in any house at any time.



But like Crane all his friends are also naughty.
Therefore his mother wants to lock away each of his friends in distinct houses.
What she'll do is to choose a distinct house for each friend. As that friend visits
that house, he'll be locked in that house.  That is, Crane's mother wants to find a 
sequence <strong>block</strong> such that
the <strong>i-th</strong> friend will be locked in <strong>block[i]-th</strong> house 
once he visits that house. As she wants to ensure that there is at maximum one
person in each house, she must choose the sequence <strong>block</strong> such
that if friend A visits house H at time T, and he is locked away in the house, then no other friends visit house H
after time T. 


Help Crane's mother to find such a sequence <strong>block</strong>. 

<h3>Input</h3>
First line contains a single integer <strong>n</strong> (1 ≤ <strong>n</strong>
≤ 100), indicating the number of friends and houses.

Then <strong>n</strong> lines follow, with each line containing <strong>n</strong> positive integers.
The <strong>j-th</strong> integer in <strong>i-th</strong> line indicates the time when the <strong>i-th</strong> friend will visit the <strong>j-th</strong> house. All times will fit in signed 32-bit integer.

<h3>Output</h3>
If there exists a sequence <strong>block</strong> that satisfies the constraints, then output <strong>block[1] block[2] ... block[n]</strong> in one line, separated by a single space.

Otherwise if there is no such sequence, output <strong>-1</strong> in one line.
If there are multiple answers, then anyone will do.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
1 2 3
4 5 6
7 8 9

<b>Output:</b>
3 2 1
</pre>