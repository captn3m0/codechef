---
languages_supported:
    - NA
title: BYTEISLE
category: NA
old_version: true
problem_code: BYTEISLE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

A long school holiday has come, and you decided to visit the famous Byte Island. You know there are only two types of Bytelandians: Byteknights and Byteknaves. A Byteknight always tells the truth, whereas a Byteknave always lies.

It is known that there are *N* Bytelandians in the island, and now you meet all of them. You are curious about their types. Because you are a smart logician, you don't want to ask them questions that immediately reveal their types (that's too boring). Instead, to each Bytelandian you ask, "How many Byteknights are there here?"

To your surprise, they also don't answer your questions directly. Instead, the *i*-th Bytelandian answers of the form "The number of Byteknights here is between *ai* and *bi*, inclusive". You record all answers in your pocket note.

Now that you have collected all information you need, determine the type of each Bytelandian.

### Input

The first line contains a single integer *T*, the number of test cases. *T* test cases follow. The first line of each test case contains a single integer *N*. *N* lines follow. The *i*-th line contains two integers *ai* and *bi*.

### Output

For each test case, output two lines. In the first line, output a single integer indicating the number of different solutions, modulo 1000000007. In the next line, output the lexicographically smallest solution. A solution is a string consisting of *N* characters, where the *i*-th character of the string is '1' if the *i*-th Bytelandian is a Byteknight, or '0' in case of a Byteknave. It is guaranteed that there is at least one valid solution.

### Example

<pre>
<b>Input:</b>
3
1
0 1
4
1 4
2 4
3 4
4 4
3
1 2
0 0
1 3

<b>Output:</b>
1
1
5
0000
1
101
</pre>
### Constraints

- 1 &lt;= *T* &lt;= 5
- 1 &lt;= *N* &lt;= 50000
- 0 &lt;= *ai* &lt;= *bi* &lt;= *N*
