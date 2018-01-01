---
category_name: hard
problem_code: EST
problem_name: 'Equivalent Suffix Tries'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: gennady.korotkevich
problem_tester: laycurse
date_added: 6-06-2012
tags:
    - gennady
    - hard
    - hashing
    - july12
    - strings
editorial_url: 'http://discuss.codechef.com/problems/EST'
time:
    view_start_date: 1342000283
    submit_start_date: 1342000283
    visible_start_date: 1341999849
    end_date: 1735669800
    current: 1493556704
layout: problem
---
All submissions for this problem are available.[Suffix trees](http://en.wikipedia.org/wiki/Suffix_tree) are very powerful data structures. Using suffix trees it's often easy to solve the hardest computer science problems on strings. In this problem we'll consider a simplified version of suffix trees -- suffix [tries](http://en.wikipedia.org/wiki/Trie) (that is, tries formed by all suffixes of a given string).

Generally, the suffix tree is a tree whose edges are labeled with strings. Instead, we'll only consider suffix tries whose edges are labeled with single characters. This way every edge of a suffix tree may correspond to one or more edges connected in a chain-style fashion of a suffix trie.

Another trait of suffix trees is that each suffix of the string for which the suffix tree is built corresponds to exactly one path from the tree's root to a leaf. This is usually achieved by terminating each suffix of the string with a special character, say, $. However, in suffix tries we won't do that. In particular, this implies that the number of leaves in a suffix trie can be smaller than the length of the original string.

In the picture the suffix tries for strings 'aba' and 'abac' are presented: ![](http://www.codechef.com/download/pic.PNG)

If we erase all letters from the edges of a suffix trie, it actually becomes a directed graph. Let's call two suffix tries equivalent if their corresponding directed graphs are [isomorphic](http://en.wikipedia.org/wiki/Graph_isomorphism).

You're given a single string consisting of lowercase Latin letters. Your task is to find the number of different strings of the same length consisting of lowercase Latin letters as well such that their suffix tries are equivalent to the suffix trie of the given string. As this number can be large enough, output the remainder of its division by 42424242.

### Input

The first line contains a single number **T** -- the number of test cases (no more than 10). Each of the next **T** lines contains a single non-empty string of length no more than 100000 consisting of lowercase Latin letters _a_.._z_.

### Output

For each test case output just one line containing the sought number modulo 42424242.

### Example

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

</pre>In the first test case every string of length 1 satisfies the condition. In the second test case every string consisting of two equal letters is fine. In the third test case every string comprising three pairwise distinct letters adds 1 to the answer. In the fourth test case string 'bee' is one of the 1300 good strings.