---
{"category_name":"medium","problem_code":"PROC18E","problem_name":"Good Speech","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"meetsid20","problem_tester":null,"date_added":"8-08-2018","tags":{"0":"meetsid20"},"time":{"view_start_date":1534442400,"submit_start_date":1534442400,"visible_start_date":1534442400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Kushagra is an extremely successful man. He has achieved everything a person can aspire for. He has been invited to give a speech about time management. But really he is no expert in managing time. The secret behind his huge success are rather his clever hacks. Obviously, he plans to use another such hack to prepare an epic time management speech.

Kushagra's vocabulary consists of $\text{N}$ words. He needs to write a speech (formally, a sequence of words with or without repetition) using exactly $\text{K}$ of these words. 

Goodness of any letter = Index of that letter in the alphabet (1 indexed)

Goodness of a word = Sum of goodness values of the letters in it

For example the word abc has goodness = 1+2+3 = 6 

Goodness of a speech is calculated as follows.

- The 1st word contributes the value same as its own goodness.
- The ith word contributes, its goodness $\text{minus}$ the goodness of its longest prefix which is shared with at least one of the j (j< i) strings already used in the speech.

For example, if K = 2 and the speech is (abc,abde), then the goodness will be goodness(abc)+goodness(de) = (1+2+3) + (4+5) = 15.

Calculate the goodness of the best speech that Kushagra can write.

###Input

The first line contains a single interger $\text{T}$ - the number of testcases. 

For each testcase,

The first line of input contains two space-separated integers, $\text{N}$ and $\text{K}$. 

The following N lines contain N distinct strings consisting of only lowercase letters of english alphabet. 

###Output
For each testcase print one line containing the goodness of the best speech that Kushagra can write.

###Constraints 
$1 \leq \text{T} \leq 10$

$1 \leq \text{N} \leq 10^5$

$1 \leq \text{K} \leq 10^9$

$1 \leq$ Sum of lengths of all $\text{N}$ strings $\leq 10^5$

###Sample Input
	1
	3 2
	c
	ab
	abc

###Sample Output
	9

###Explanation
One possible speech of maximum goodness can be S = (c, abc).
Goodness(S) = goodness(c) + goodness(abc) = 3 + (1+2+3) = 9

