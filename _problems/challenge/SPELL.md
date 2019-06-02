---
category_name: challenge
problem_code: SPELL
problem_name: 'The Spelling Problem'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
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
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: null
date_added: 7-10-2014
tags:
    - challenge
    - nov14
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SPELL'
time:
    view_start_date: 1416216600
    submit_start_date: 1416216600
    visible_start_date: 1416216600
    end_date: 1735669800
    current: 1528985566
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/NOV14/mandarin/SPELL.pdf) and [Russian](http://www.codechef.com/download/translated/NOV14/russian/SPELL.pdf).

Fedya and Alex are OI-ers. They live in different cities, but they like to write letters to each other, in which they discuss complicated data structure problems, contests, nice girls/ boys, animes and other not so important things.

Nevertheless, there is a problem, arising sometimes. Being quite young and impatient, Fedya is eager to send his just typed letter. Though everything is okay with it, but like any of us, Fedya sometimes makes some spelling mistakes in the typed text. Being a perfectionist, Alex sometimes gets upset, when he sees mistakes in Fedya's letters.

More precisely, sometimes Fedya can following mistakes:

- to swap two letters;
- to skip a letter;
- to insert an irrelevant letter;
- to mistype a letter in some of the words.


Though, he is an intelligent guy and he never makes more than **one** mistake in a single typed word.

Fedya isn't really bad at spelling, so he will make mistakes in no more than 4% of the typed words.

Alex is a nice guy. In order to upset less, he has decided to write a program that will correct Fedya's mistakes. But this appeared to be not an easy task for him. So we ask you to help Alex.

Formally, you will be given a text. The text will be an English text with correct grammar and spelling. Somewhere in the text, the mistakes of some of the above kinds will be made. You need to provide the modified text that will contain as less mistakes as possible (see Grading section). In order to make our problem easier, we will give you a dictionary of English words. The most part of words will appear in the dictionary, but not all of them.

### Input

The first line of input contains a single integer **D**, denoting the number of words in the dictionary. Then, **D** lines will follow, each will contain a dictionary word. The dictionary used is the same in all the test cases, and you can download it [here](http://www.codechef.com/download/NOV14/SPELL_dict.txt).

Then there is a line, containing lowercase English text, consisting of words and numbers. All the punctuation but dots, exclamation and question marks, commas and apostrophes will be removed. All the sentences always ends with dots, but the dot can also be used in shortings (like Mr., Mrs.) and abbreviations.

### Output

Output the corrected text in the same format as it is given to you in the input.

### Grading

You will not get any "Wrong Answer" verdict in this problem. The scoring mechanism works as follows:

- First, we split your output into the consecutive words of non-space symbols, that can't be extended by adding a symbol to the left, or to the right.
- Then, we do a group-by-group comparison with the official outputs' groups.
- If the current group was correct in the input, but in your output it is incorrect, your score for the test case decreases by **1**.
- If the current group was incorrect in the input, but in your output it is correct, your score for the test cases increases by **3**.
- We compare only the first **min{the number of groups in your output; the number of groups in the official output}** groups of symbols. So, you can output not all the text - that will possibly not enable you to score as much points as possible, but if you find it convenient, you can use it.
- If your score for the test case is lower than 0, it will be increased to 0.
- Your initial score for each test case equals to **100**. So, if you don't change the text at all, you will still receive some positive amount of points.

As you can easily see, you should leave all the punctuation on its' places.

### Test Data Generation

All the texts, given to you will be basically normal English texts (of any style) with mistakes in some words. The amount of mistaken words is about 4%. Basically, you should treat the mistakes as the one that had been made by a human.

Some test data sizes information:

- The **10%** of the test data will have the text of the size of approximately **10 MB**.
- The additional **40%** of the test data will have the text of the size of **1** to **3 MB**.
- The rest of the test data has texts of the size below **1 MB**.

### Example

<pre><b>Input:</b>
[dictionary declaration is omitted in this sample case]
thus is the sample text.

<b>Output:</b>
this is the sample text.
</pre>
### Explanation

This answer will get a score of **103** points.
