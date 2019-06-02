---
category_name: easy
problem_code: NOLOGIC
problem_name: 'Lack of Logic'
languages_supported:
    - C
    - 'CPP 4.9.2'
    - CPP14
    - JAVA
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: anton_lunyov
problem_tester: laycurse
date_added: 6-02-2013
tags:
    - ad
    - anton_lunyov
    - cakewalk
    - cook31
editorial_url: 'http://discuss.codechef.com/problems/NOLOGIC'
time:
    view_start_date: 1361126539
    submit_start_date: 1361126539
    visible_start_date: 1361126539
    end_date: 1735669800
    current: 1493558171
layout: problem
---
All submissions for this problem are available.Consider the following dialog.

\- Father, what is the lack of logic?
\- Bunny.
\- Where?
\- Day./>/>/>

As you see, father's answers have no logic demonstrating the son the notion of "lack of logic" using live example :D

Let's try to formalize things. Note that both father's answers have no common letters with the corresponding questions. Probably this is the reason. **Let's say that the answer has no logic if it has no common letters with the question.** Your task is to write a bot that will answer annoying comments of contestants at codechef using this definition. Note that letter denotes a lowercase or uppercase English alphabet (ASCII code from 65 to 90 or from 97 to 122).

Namely, you will be given several questions and you need to produce answers to these questions that have no logic. Note that lowercase and uppercase letters are considered the same when treating "no common letters" rule. Also note that this rule concerns only letters. **The answer should contain at least one letter.** If it is impossible to produce such answer then output "~" (tilde sign, quotes are for clarity).

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The only line of each test case contains the question. The question is a non-empty string where each character has ASCII code from 32 to 126, inclusive (refer to [this](http://www.ascii.cl/)).

### Output

For each test case, output a single line containing the answer to this question that has no logic or "~" (quotes for clarity) if it is impossible to find such answer. Each character in the answer should be either a space (ASCII code 32), or the letter of English alphabet (lowercase or uppercase). Recall that the answer should contain at least one letter. The number of characters in the answer should not exceed 314. You can output any answer satisfying these constraints that has no logic.

**Note!** Special judge is very strict for this problem and check your output character-by-character. Be sure that you follow the mentioned output format precisely. For instance, your output should contain exactly **T** new-line characters (ASCII code 10) - one after each answer.

### Constraints

- **1** ≤ **T** ≤ **314**
- **1** ≤ **the number of characters in the question** ≤ **314**

### Example

<pre>
<b>Input:</b>
4
Father, what is the lack of logic?
Where?
The quick brown fox jumps over the lazy dog.
!!!

<b>Output:</b>
Bunny
Day
~
You Can output aLoMsT anytihng HERE
</pre>
### Explanation

Example cases 1 and 2 correspond to the dialog in the problem statement. Note that we don't print dots since it is allowed to have only spaces and letters in the answer.

In example case 3 each letter of English alphabet is used in the question. Hence we can't produce the answer that has no logic.
