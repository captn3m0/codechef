---
{"category_name":"hard","problem_code":"EST","problem_name":"Equivalent Suffix Tries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"gennady.korotkevich","problem_tester":"laycurse","date_added":"6-06-2012","tags":{"0":"gennady","1":"hard","2":"hashing","3":"july12","4":"strings"},"editorial_url":"http://discuss.codechef.com/problems/EST","time":{"view_start_date":1342000283,"submit_start_date":1342000283,"visible_start_date":1341999849,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><a href="http://en.wikipedia.org/wiki/Suffix_tree">Suffix trees</a> are very powerful data structures. Using suffix trees it's often easy to solve the hardest computer science problems on strings. In this problem we'll consider a simplified version of suffix trees -- suffix <a href="http://en.wikipedia.org/wiki/Trie">tries</a> (that is, tries formed by all suffixes of a given string).

</p><p>Generally, the suffix tree is a tree whose edges are labeled with strings. Instead, we'll only consider suffix tries whose edges are labeled with single characters. This way every edge of a suffix tree may correspond to one or more edges connected in a chain-style fashion of a suffix trie.

</p><p>Another trait of suffix trees is that each suffix of the string for which the suffix tree is built corresponds to exactly one path from the tree's root to a leaf. This is usually achieved by terminating each suffix of the string with a special character, say, $. However, in suffix tries we won't do that. In particular, this implies that the number of leaves in a suffix trie can be smaller than the length of the original string.

</p><p>In the picture the suffix tries for strings 'aba' and 'abac' are presented:

<img src="http://www.codechef.com/download/pic.PNG" />

</p><p>If we erase all letters from the edges of a suffix trie, it actually becomes a directed graph. Let's call two suffix tries equivalent if their corresponding directed graphs are <a href="http://en.wikipedia.org/wiki/Graph_isomorphism">isomorphic</a>.

</p><p>You're given a single string consisting of lowercase Latin letters. Your task is to find the number of different strings of the same length consisting of lowercase Latin letters as well such that their suffix tries are equivalent to the suffix trie of the given string. As this number can be large enough, output the remainder of its division by 42424242.

<h3>Input</h3>
</p><p>The first line contains a single number <b>T</b> -- the number of test cases (no more than 10). Each of the next <b>T</b> lines contains a single non-empty string of length no more than 100000 consisting of lowercase Latin letters <i>a</i>..<i>z</i>.

<h3>Output</h3>
</p><p>For each test case output just one line containing the sought number modulo 42424242.

<h3>Example</h3>

<pre>
<b>Input:</b>
5
a
aa
abc
aba
helloworld

<b>Output:</b>
26
26
15600
1300
6221124

<b>Explanation:</b>
</pre>
</p><p>In the first test case every string of length 1 satisfies the condition. In the second test case every string consisting of two equal letters is fine. In the third test case every string comprising three pairwise distinct letters adds 1 to the answer. In the fourth test case string 'bee' is one of the 1300 good strings.</p>