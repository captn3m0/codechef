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

It is known that there are _N_ Bytelandians in the island, and now you meet all of them. You are curious about their types. Because you are a smart logician, you don't want to ask them questions that immediately reveal their types (that's too boring). Instead, to each Bytelandian you ask, "How many Byteknights are there here?"

To your surprise, they also don't answer your questions directly. Instead, the _i_-th Bytelandian answers of the form "The number of Byteknights here is between _ai_ and _bi_, inclusive". You record all answers in your pocket note.

Now that you have collected all information you need, determine the type of each Bytelandian.

### Input

The first line contains a single integer _T_, the number of test cases. _T_ test cases follow. The first line of each test case contains a single integer _N_. _N_ lines follow. The _i_-th line contains two integers _ai_ and _bi_.

### Output

For each test case, output two lines. In the first line, output a single integer indicating the number of different solutions, modulo 1000000007. In the next line, output the lexicographically smallest solution. A solution is a string consisting of _N_ characters, where the _i_-th character of the string is '1' if the _i_-th Bytelandian is a Byteknight, or '0' in case of a Byteknave. It is guaranteed that there is at least one valid solution.

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

</pre>### Constraints
- 1 <= _T_ <= 5
- 1 <= _N_ <= 50000
- 0 <= _ai_ <= _bi_ <= _N_
