---
{"category_name":"easy","problem_code":"BEX","problem_name":"Book Exercises","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":"laycurse","date_added":"6-09-2012","tags":{"0":"dec12","1":"easy","2":"stack","3":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/BEX","time":{"view_start_date":1355221008,"submit_start_date":1355221008,"visible_start_date":1355218200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Harry is a bright student. To prepare thoroughly for exams, he completes all the exercises in his book! Now that the exams are approaching fast, he is doing book exercises day and night. He writes down and keeps updating the remaining number of exercises on the back cover of each book.</p>
<p>Harry has a lot of books messed on the floor. Therefore, he wants to pile up the books <b>that still have some remaining exercises</b> into a single pile. He will grab the books one-by-one and add the books that still have remaining exercises to the top of the pile.</p>
<p>Whenever he wants to do a book exercise, he will pick the book with the minimum number of remaining exercises from the pile. In order to pick the book, he has to remove all the books above it. Therefore, if there are more than one books with the minimum number of remaining exercises, he will take the one which requires the least number of books to remove. The removed books are returned to the messy floor. After he picks the book, he will do all the remaining exercises and trash the book.</p>
<p>Since number of books is rather large, he needs your help to tell him the number of books he must remove, for picking the book with the minimum number of exercises.</p>
<p>
Note that more than one book can have the same name.
</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>N</b> denoting the number of actions. Then <b>N</b> lines follow. Each line starts with an integer. If the integer is -1, that means Harry wants to do a book exercise. Otherwise, the integer is number of the remaining exercises in the book he grabs next. This is followed by a string denoting the name of the book.</p>
<h3>Output</h3>
<p>For each -1 in the input, output a single line containing the number of books Harry must remove, followed by the name of the book that Harry must pick.</p>
<h3>Constraints</h3>
<p>
1 &lt; <b>N</b> ≤ 1,000,000<br /> 0 ≤ (the number of remaining exercises of each book) &lt; 100,000<br /> The name of each book consists of between 1 and 15 characters 'a' - 'z'.<br /> Whenever he wants to do a book exercise, there is at least one book in the pile.<br />
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
9 english
6 mathematics
8 geography
-1
3 graphics
-1

<b>Output:</b>
1 mathematics
0 graphics
</pre>