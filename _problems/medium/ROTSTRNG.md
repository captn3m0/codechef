---
languages_supported:
    - NA
title: ROTSTRNG
category: NA
old_version: true
problem_code: ROTSTRNG
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Did you know that a cluster of bananas can also be called a 'hand' of bananas ? No points for guessing what the individual bananas are called. ya.. 'fingers' :). The monkey from the valley of food is all set to fight for the title 'Dragon Chef' after having a hand of bananas for breakfast. As you know that the judge, master Oogway is always late for the show, the monkey and Po decided to play a game. They took a string of characters and started rotating it.

A k-rotation on a string takes the trailing k characters of the string and attaches it to the beginning of the string in the same order. For eg. 3-rotation on the string "noodles" results in the string "lesnood". On the given string **S**, the monkey performs a **M**-rotation and gives it to Po. Po performs a **P**-rotation on it and gives back to the monkey. The monkey again performs a **M**-rotation on it and so on... Though Shifu is getting angry watching the monkey play with Po, he is wondering after how many minimum (non-zero) number of rotations we can get back to the original string **S**. This can happen after a rotation performed by the monkey or Po. Please find it for him.

### Input

First line contains T ( number of test cases, around 10 ). T cases follow. Each case consists of two lines. First line has the string S of length n ( 1 <= n <= 500,000 ), having ('a'-'z' , 'A'-'Z'). Second line contains two integers M P separated by a space ( 1 <= M, P <= n ). Comparisons are case sensitive i.e., 'a' is not equal to 'A'.

### Output

For each test case, output the answer in a new line. If its impossible to get back to the original string by performing the rotations as mentioned above, print -1

### Example

<pre>
<b>Input:</b>
2
AbcDef
1 2
abcabc
1 1

<b>Output:</b>
4
3
<br></br>
<b>Explanation</b>
Case 1 :
Monkey : fAbcDe , Po : DefAbc, Monkey : cDefAb , Po : AbcDef

Case 2 :
Monkey : cabcab , Po : bcabca, Monkey : abcabc
</pre>

*Warning : Large input / output. You may have to use efficient input / output methods if you are using languages with heavy input / output overload. Eg: Prefer using scanf/printf to cin/cout for C/C++*
