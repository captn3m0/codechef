---
languages_supported:
    - NA
title: SUBANAGR
category: NA
old_version: true
problem_code: SUBANAGR
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Let's start from some definitions.

Strings **A** and **B** are called _anagrams_ if it's possible to rearrange the letters of string **A** using all the original letters exactly once and achieve string **B**; in other words **A** and **B** are permutations of each other. For example, _remote_ and _meteor_ are anagrams, _race_ and _race_ are anagrams as well, while _seat_ and _tease_ aren't anagrams as _tease_ contains an extra _'e'_.

String **A** is called a _subsequence_ of string **B** if **A** can be obtained from **B** by removing some (possibly none) characters. For example, _cat_ is a subsequence of _scratch_, _rage_ is a subsequence of _rage_, and _tame_ is not a subsequence of _steam_.

String **A** is _lexicographically smaller_ than string **B** of the same length if at the first position where **A** and **B** differ **A** contains a letter which is earlier in the alphabet than the corresponding letter in **B**.

Recently, Ann received a set of strings consisting of small Latin letters _a_.._z_. 'What can I do with them?' -- she asked herself. 'What if I try to find the longest string which is a subsequence of every string from the set?'. Ann spent a lot of time trying to solve the problem... but all her attempts happened to be unsuccessful. She then decided to allow the sought string to be an anagram of some subsequence of every string from the set. This problem seemed to be easier to Ann, but she was too tired to solve it, so Ann asked for your help.

So your task is, given a set of strings, to find the longest non-empty string which satisfies Ann. Moreover, if there are many such strings, choose the lexicographically smallest one.

### Input

The first line of the input file contains one integer **N** -- the number of strings in the set (1 ≤ **N** ≤ 100). Each of the next **N** lines contains a non-empty string consisting only of small Latin letters _a_.._z_ representing a string from the set. None of the strings contain more than 100 letters.

### Output

Output the longest non-empty string satisfying Ann. If there are several such strings, output the lexicographically smallest one. If there are no such strings, output '**no such string**' (quotes for clarity).

### Example

<pre>
<b>Input:</b>
3
hope
elephant
path

<b>Output:</b>
hp

<b>Input:</b>
2
wall
step

<b>Output:</b>
no such string

<b>Explanation:</b>

</pre>In the first test case the longest string appears to be two characters long. String 'hp' satisfies the requirements as it's an anagram of 'hp' which is a subsequence of 'hope' and an anagram of 'ph' which is a subsequence of both 'elephant' and 'path'. Note that string 'ph' also satisfies the requirements, but 'hp' is lexicographically smaller.
In the second test case there is no such string.
