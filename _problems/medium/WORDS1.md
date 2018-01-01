---
languages_supported:
    - NA
title: WORDS1
category: NA
old_version: true
problem_code: WORDS1
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Some of the secret doors contain a very interesting word puzzle. The team of archaeologists has to solve it to open that doors. Because there is no other way to open the doors, the puzzle is very important for us.

There is a large number of magnetic plates on every door. Every plate has one word written on it. The plates must be arranged into a sequence in such a way that every word begins with the same letter as the previous word ends. For example, the word acm'' can be followed by the word motorola''. Your task is to write a computer program that will read the list of words and determine whether it is possible to arrange all of the plates in a sequence (according to the given rule) and consequently to open the door.

### Input

The input consists of T test cases. The number of them (T, equal to about 500) is given on the first line of the input file. Each test case begins with a line containing a single integer number N that indicates the number of plates (1 <= N <= 100000). Then exactly Nlines follow, each containing a single word. Each word contains at least two and at most 1000 lowercase characters, that means only letters '`a`' through '`z`' will appear in the word. The same word may appear several times in the list.

### Output

Your program has to determine whether it is possible to arrange all the plates in a sequence such that the first letter of each word is equal to the last letter of the previous word. All the plates from the list must be used, each exactly once. The words mentioned several times must be used that number of times.

If there exists such an ordering of plates, your program should print the sentence "`Ordering is possible.`". Otherwise, output the sentence "`The door cannot be opened.`".

### Example

<pre>Sample input:

3
2
directi
codechef
3
skenzo
logicboxes
orderbox
2
ok
ok


Sample output:

The door cannot be opened.
Ordering is possible.
The door cannot be opened.

</pre>**Warning: large Input/Output data, be careful with certain languages**