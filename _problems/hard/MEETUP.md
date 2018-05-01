---
category_name: hard
problem_code: MEETUP
problem_name: 'Meeting location'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: lg5293
problem_tester: errichto
date_added: 13-03-2017
tags:
    - cook80
    - divide
    - hard
    - interactive
    - lg5293
editorial_url: 'https://discuss.codechef.com/problems/MEETUP'
time:
    view_start_date: 1489949100
    submit_start_date: 1489949100
    visible_start_date: 1489949100
    end_date: 1735669800
    current: 1493556766
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK80/mandarin/MEETUP.pdf), [Russian](http://www.codechef.com/download/translated/COOK80/russian/MEETUP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK80/vietnamese/MEETUP.pdf) as well.

 This is an interactive problem. It means that every time you output something, you must finish with a newline character and flush the output. For example, in C++ use the fflush(stdout) function, in Java — call System.out.flush(), in Python — sys.stdout.flush(), and in Pascal — flush(output). Only after flushing the output will you be able to read from the input again.

Alice and Bob are taking a trip to Byteland. The country can be modeled as an undirected graph with **n** cities and **m** bidirectional roads. There are at most 1,000 cities, and between 0 and **n** \* (**n**-1) / 2 roads. The graph is not necessarily connected.

Alice likes visiting cities that are directly connected. She chose **ka** nodes that form a clique (i.e. every pair of cities has a direct road between them). Bob on the other hand likes to visit cities that are not directly connected. He chose **kb** nodes that form an independent set of the graph (i.e. no pair of cities has a direct road between them).

Alice and Bob would like to know if their itineraries have any common cities. This seemingly simple task is complicated by the fact that Alice and Bob have maps in different languages.

Alice’s map has the cities with names **a**1, **a**2, …, **a****n**. Bob’s map has cities with names **b**1, **b**2, …, **b****n**. These names are all distinct.

Luckily for you, the judge knows how to translate strings between the languages. Formally, there is a hidden function f that the judge keeps such that for every i there exists a unique j such that f(**a**i) = **b**j, and **a**p, **a**q have a direct edge if and only if f(**a**p),f(**a**q) have a direct edge. We will denote f-1(x) to denote the inverse of the function f. Intuitively, f translates strings from language A to language B, and f-1 translates them from language B to language A.

Translating words takes a lot of effort. You would like to help Alice and Bob by translating as few as words as possible. You can ask the judge what the value of f(**a**i) is, or what the value of f-1(**b**j) is. You may only ask the judge at most 10 questions. After asking questions, you must be able to determine if Alice and Bob will visit any common cities. Formally, this means checking whether there exists a city **a**i that Alice visits and a city **b**j that Bob visits such that f(**a**i) = **b**j.

### Input

The first line will contain four integers, **n, m, ka, kb**. Next will follow a description of a map in Alice's language, then a description of a map in Bob's language.

A map can be described as follows: The first line contains n strings. The first **ka** (resp **kb**) strings denote the cities that Alice (resp Bob) will visit. The next **m** lines describe an undirected edge between two cities.

### Interaction

To ask a question, print “A s” to denote you would like to know what f(s) is (s must be one of **a**1, **a**2, …, **a****n**). Print “B s” to denote you would like to know what f-1(s) is (s must be one of **b**1, **b**2, …, **b****n**). Don't forget to flush the question after printing it. The judge will respond to the question by printing a string denoting the answer to your question. You may ask at most 10 questions.

Once you are finished asking questions, and are ready to answer the main question of whether or not Alice and Bob will visit any common cities, print “C s”, where s is either “Yes” or “No” (note, this is case sensitive).

### Constraints

- 1 ≤ **n** ≤ 1000
- 0 ≤ **m** ≤ **n** \* (**n**-1) / 2
- 1 ≤ **ka** ≤ **n**
- 1 ≤ **kb** ≤ **n**

 The city names are all distinct and have between 1 and 10 characters, inclusive. All city names consist of only lowercase letters. It is guaranteed that the first **ka** cities in Alice's map are a clique, and the first **kb** cities in Bob's map are an independent set. It is guaranteed that the maps described are isomorphic according to the hidden function f that the judge has.

### Example

<pre>
</pre>your program the system4 3 1 1 ab bc cd de ab bc bc cd cd de w y x z x w y x y zA cdxA bcyB xcdA abzB wdeC No### Explanation

Here, we have 4 cities and 3 roads. Alice's map has cities with labels "ab", "bc", "cd", "de". Bob's map has cities with labels "w", "y", "x", "z". Alice visits cities {"ab"}. Bob visits cities {"w"}. Here, we show an example of the interaction. The translation function in this case is "ab" = "z", "bc" = "y", "cd" = "x", "de" = "w". In this case, we can see that Alice and Bob don't visit any cities in common, so the final answer is No.
