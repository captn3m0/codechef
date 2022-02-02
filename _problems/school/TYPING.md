---
{"category_name":"school","problem_code":"TYPING","problem_name":"Chef and Typing","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"18-10-2018","tags":{"0":"ad","1":"cakewalk","2":"kingofnumbers","3":"mapping","4":"snck1a19","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/TYPING","time":{"view_start_date":1540092600,"submit_start_date":1540092600,"visible_start_date":1540092600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S191ATST/hindi/TYPING.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S191ATST/mandarin/TYPING.pdf), [Russian](http://www.codechef.com/download/translated/S191ATST/russian/TYPING.pdf), [Vietnamese](http://www.codechef.com/download/translated/S191ATST/vietnamese/TYPING.pdf) and [Bengali](http://www.codechef.com/download/translated/S191ATST/bengali/TYPING.pdf) as well.

Chef is practising his typing skills since his current typing speed is very low. He uses a training application that displays some words one by one for Chef to type.

When typing a word, Chef takes 0.2 seconds to type the first character; for each other character of this word, he takes 0.2 seconds to type this character if it is written with a different hand than the previous character, or 0.4 seconds if it is written with the same hand. The time taken to type a word is the sum of times taken to type all of its characters. However, if a word has already appeared during practice, Chef can type it in half the time it took him to type this word for the first time.

Currently, Chef is practising in easy mode, which only uses words that consists of characters 'd', 'f', 'j' and 'k'. The characters 'd' and 'f' are written using the left hand, while the characters 'j' and 'k' are written using the right hand.

Given the words that appeared during Chef's practice, calculate the total time taken by Chef to type all the words.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$ denoting the number of words Chef had to type.
- Each of the following $N$ lines contains a single string — a word Chef has to type.

### Output
For each test case, print a single line containing one integer — the time taken by Chef to type all the words, in the units of tenths of seconds.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 100$
- each word contains only characters 'd', 'f', 'j', 'k'
- the length of each word does not exceed $20$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
1
5
fdjkd
dfjdk
dfd
fdjkd
kkjjk
```
### Example Output
```
61
```