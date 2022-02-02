---
{"category_name":"easy","problem_code":"STONES","problem_name":"Jewels and Stones","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"yellow_agony","problem_tester":"subra","date_added":"26-02-2012","tags":{"0":"easy","1":"may12","2":"yellow_agony"},"editorial_url":"http://discuss.codechef.com/problems/STONES","time":{"view_start_date":1336722949,"submit_start_date":1336722949,"visible_start_date":1336722949,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Soma is a fashionable girl. She absolutely loves shiny stones that she can put on as jewellery accessories. She has been collecting stones since her childhood - now she has become really good with identifying which ones are fake and which ones are not.  Her King requested for her help in mining precious stones, so she has told him which all stones are jewels and which are not. Given her description, your task is  to count the number of jewel stones. 
</br></br>
More formally, you're given a string J composed of latin characters where each character is a jewel. You're also given a string S composed of latin characters where each character is a mined stone. You have to find out how many characters of S are in J as well. 

<h3>Input</h3>
<p>
First line contains an integer T denoting the number of test cases. Then follow T test cases. Each test case consists of two lines, each of which contains a string composed of English lower case and upper characters. First of these is the jewel string J and the second one is stone string S. </br>You can assume that  1 <= T <= 100, 1 <= |J|, |S| <= 100


<h3>Output</h3>
<p>Output for each test case, a single integer, the number of jewels mined. 

<h3>Example</h3>

<pre>
<b>Input:</b>
4
abc
abcdef
aA
abAZ
aaa
a
what
none

<b>Output:</b>
3
2
1
0
</pre>
