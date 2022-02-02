---
languages_supported:
    - NA
title: TRMAG
category: NA
old_version: true
problem_code: TRMAG
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Taru likes reading. Every month he gets a copy of the magazine "BIT". The magazine contains information about the latest advancements in technology. Taru reads the book at night and writes the page number to which he has read on a piece of paper so that he can continue from there the next day. But sometimes the page number is not printed or is so dull that it is unreadable. To make matters worse Taru's brother who is really naughty tears of some of the pages of the Magazine and throws them in the dustbin. He remembers the number of leaves he had torn but he does not remember which page numbers got removed. When Taru finds this out he is furious and wants to beat him up. His brother apologizes, and says he won't ever do this again. But Taru did not want to be easy on him and he says "I will leave you only if you help me find the answer to this. I will tell you how many pages (Printed sides) were there in the Magazine plus the pages on which the page numbers were not printed. You already know the number of leaves you tore (T). Can you tell me the expected sum of the page numbers left in the Magazine?" Taru's brother replied "huh!! This is a coding problem". Please help Taru's brother.

Note: The magazine is like a standard book with all odd page numbers in front and the successive even page number on its back. If the book contains 6 pages, Page number 1 and Page number 2 are front and back respectively. Tearing a leaf removes both the front and back page numbers.

### Input

The first line contains the number of test cases t. 3t lines follow. The first line of each test case contains the number of pages (printed sides) in the book. The second line's first integer is F, F integers follow which tell us the numbers of the page numbers not printed. The third line contains a single integer telling us the number of leaves Taru's brother tore.

### Output

Output one real number correct up to 4 decimal digits which is equal to the expected sum of the page numbers left in the book.

### Constraints

Number of printed Sides&lt;=2000. All other values abide by the number of printed sides.

### Example

<pre>
<b>Input:</b>
2
10
2 1 2
2
10
1 8
0

<b>Output:</b>
31.2000
47.0000
</pre>