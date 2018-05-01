---
languages_supported:
    - NA
title: MISINT2
category: NA
old_version: true
problem_code: MISINT2
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef's brother likes to put words in Chef's mouth. Chef hates it about him of course. He has decided to become extremely careful about what he speaks. Fortunately, he knows how his brother transforms the words, that Chef uses. He has decided to use only those words which remain the same even after his brother's transformation! 

If Chef speaks an **N** letter word, his brother moves all the letters which are at even positions (assuming, numbering of positions starts from 1), to the beginning of the word; and the rest of the letters follow as they appeared in the word, e.g. abdef becomes beadf; cdcd becomes ddcc. 

Chef wants to know how many words he can use, provided that the length of each word is between **L** and **R** inclusive and each word is composed of lowercase letters of the English alphabet. They use an ancient language in Byteland, which allows all possible words within the above definition!

### Input

The first line contains a positive integer **T**, the number of test cases. In the following lines, **T** test cases follow. Every test case is a single line that contains two space separated positive integers, **L** and **R**. **L** is lower bound and **R** is upper bound for the length of the word that Chef wants to use.

### Output

For each test case, print the number of words with length between **L** and **R** inclusive that Chef can use; that is, number of words, which remain the same after brother's transformation. Since the result can be quite large, output the result modulo **1000000007**.

### Constraints

**1 <= T <= 5 
1 <= L <= R <= 1010
R - L <= 50000**

### Sample input

<pre>3
1 5
6 7
45 50

</pre>### Sample output

<pre>1430
18252
871229844

</pre>