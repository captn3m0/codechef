---
category_name: easy
problem_code: NOCODING
problem_name: 'Code Crazy Minions'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: gamabunta
problem_tester: null
date_added: 7-08-2012
tags:
    - cook25
    - gamabunta
    - greedy
time:
    view_start_date: 1345403917
    submit_start_date: 1345403917
    visible_start_date: 1345403917
    end_date: 1735669800
    current: 1493558217
layout: problem
---
All submissions for this problem are available.Coding in Sprout (a programming language) is very intuitive. Chef is giving his minions a demonstration in Sprout and wants you to help him determine if they are not too difficult for them.

A program in Sprout is written using three kinds of instructions.

- Load Instruction: Load a value into buffer.
- Increment Instruction: Increment the value in buffer.
- Print Instruction: Print the value from buffer.

The buffer stores a single integer between 0 and 25, both inclusive. If the value in the buffer is x, the increment instruction makes the value (x+1), if x < 25. At x = 25 the increment instruction makes the value 0.

Load Instruction can be used to load any value between 0 and 25 (inclusive) into the buffer.

Print from the buffer prints a lowercase English character based on the value in the buffer. Precisely, it prints the (x+1)th character in the alphabet. Thus, for x = 0, 'a' is printed; x = 1, 'b' is printed and so on. For x = 25, 'z' is printed.

To keep his programs clear, he uses the load instruction only once in the beginning (before printing any character). Then he proceeds instruction after instruction. A program is simple, if the number of instructions is not more than ELEVEN times the length of the word that it prints. Given the word Chef wants his program to print and assuming he will write the shortest code (i.e. use the fewest instructions) to print it, will the program be simple?

### Input

The first Line contains a single number T, the number of test cases.

Each test case contains 1 word on a line by itself - the word that would be printed by Chef's program.

### Output

Assuming Chef writes the shortest code (with minimum instructions) to print the given word, output "YES" if this code is not more than ELEVEN times the length of the word being printed; "NO" otherwise

### Constraints

<pre>1 ≤ T ≤ 100
1 ≤ length of word ≤ 1000

</pre>### Sample Input
<pre>2
helloworld
mississippi

</pre>### Sample Output
<pre>NO
YES

</pre>### Explanation
The optimal program length for mississippi is 112 instructions and that is smaller than 121 (length of 'mississippi' \* 11)
