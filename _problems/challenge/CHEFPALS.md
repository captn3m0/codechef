---
category_name: challenge
problem_code: CHEFPALS
problem_name: '(Challenge) Chef and Palindromes'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: null
date_added: 12-10-2015
tags:
    - berezin
time:
    view_start_date: 1516008600
    submit_start_date: 1516008600
    visible_start_date: 1516008600
    end_date: 1735669800
    current: 1525199506
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef loves palindromes! Chef loves them so much he can see palindromes anywhere! Even in this problem.

Chef has **N** sequences of white cells. For each **i** (1 ≤ **i** ≤ **N**), the **i**-th sequence is formed by **li** cells; Chef has to paint exactly **bi** of these cells black.

After painting those cells, Chef writes down the lengths of all white blocks (maximum contiguous subsequences of white cells) from left to right as a single string of digits.

For example, if Chef's initial sequence of cells is **"wwwwwwwww"** and he has to paint three cells black, he can get **"bwwbwbwww"** ('w' stands for a white cell, 'b' for a black cell). In this case, he will write down the lengths of white blocks 2, 1, 3 as the string **"213"**. He can also paint it to get **"bbwwwwwbw"** and write down **"51"**. He can even paint it to get **"bbbwwwwww"** and write down **"6"**. There are many other options as well.

After painting all sequences, Chef will have written down a list of **N** strings. Now he can reorder these strings **in any way he wants** and concatenate them into one string **S**.

It's time for palindromes! Chef wants the resulting string **S** to be as close to a palindrome as possible. The distance of **S** to a palindrome is defined as the minimum number of characters in **S** that Chef needs to change to get a palindrome.

For example, the string **"123345"** has distance 2 to a palindrome. Strings **"2"** and **"1221"** have distance 0 to a palindrome, since they are already palindromes.

You need to find a way to paint some cells, reorder and concatenate the resulting strings to form a string **S** with the minimum possible distance to a palindrome.

### Input

- The first line of the input contains a single integer **N**.
- The second line contains **N** space-separated integers **l1, l2, ..., lN**.
- The third line contains **N** space-separated integers **b1, b2, ..., bN**.

### Output

- The first **N** lines of the output should describe the sequences of cells obtained after painting some cells black.
- The **i**-th of these lines should contain a single string of length **li** consisting of letters 'b' and 'w'. There should be exactly **bi** letters 'b' in this string.
- The following line should contain a sequence of **N** space-separated integers **p1, p2, ..., pN** denoting the order of strings written down for each sequence of cells — the **i**-th string in the concatenation should be the string written down for the **pi**-th sequence of cells. **p1, p2, ..., pN** has to be a permutation of numbers 1 through **N**.

### Constraints

- **N** = 1000
- 1 ≤ **li** ≤ 1000 for each valid **i**
- 0 ≤ **bi** li for each valid **i**

### Example

<pre><b>Input:</b>

4
5 10 3 8
2 2 1 2

<b>Output:</b>

wwbbw
wwwwbbwwww
wwb
wwwwbbww
2 1 3 4
</pre>
### Explanation

- In the first sequence of cells, painting the third and fourth cell gives **"wwbbw"** with white blocks of lengths 2 and 1, which gives Chef the string **"21"**.
- **"wwwwbbwwww"** gives Chef the string **"44"**.
- **"wwb"** gives Chef **"2"**.
- **"wwwwbbww"** gives Chef **"42"**.

After reordering the strings "21", "44", "2", "42" using the permutation (2, 1, 3, 4), Chef gets strings "44", "21", "2", "42" and concatenates them to **S** = **"4421242"**. The distance of this string to a palindrome is 1, as Chef only has to replace the last digit with '4' to get a palindrome.

### Scoring

- If your output is invalid in at least one test case, you will receive WA verdict.
- Your score for each test case is equal to the distance of the string **S** (obtained for your output) to a palindrome plus 1.
- The total score for a submission is the sum of scores for all test cases.
- Your goal is to minimise the total score.
- During the contest, your score will be calculated only for one test case from each of groups 1, 3, 5 and 7 of test cases. After the contest, there will be a rejudge using all test cases from all groups.

### Test generation

- Let random(**x**) denote a uniformly random integer in the range \[0, **x**\].
- For each valid **i**, **li** = random(999) + 1.
- There will be 8 groups of test cases, groups 1, 3, 5 have 3 test-cases each, and groups 2, 4 have 4 test-cases each, while groups 6, 7, 8 have one test-case each.
    - In group 1, **bi** = random(random(**li** - 1)) for each valid **i**.
    - In group 2, **bi** = random(random(random(**li** - 1))) for each valid **i**.
    - In group 3, **bi** = random(random(random(random(**li** - 1)))) for each valid **i**.
    - In group 4, **bi** = random(random(random(random(random(**li** - 1))))) for each valid **i**.
    - In group 5. **bi** = random(random(random(random(random(random(**li** - 1)))))) for each valid **i**.
    - In group 6. **bi** = random(random(random(random(random(random(random(random(**li** - 1)))))))) for each valid **i**.
    - In group 7. **bi** = random(random(random(random(random(random(random(random(random(**li** - 1))))))))) for each valid **i**.
    - In group 8. **bi** = random(random(random(random(random(random(random(random(random(random(**li** - 1)))))))))) for each valid **i**.
