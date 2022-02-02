---
{"category_name":"challenge","problem_code":"SPLIT","problem_name":"Splitting Giant Subs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":0.714981,"source_sizelimit":50000,"problem_author":"friggstad","problem_tester":"subra","date_added":"30-11-2010","tags":{"0":"challenge","1":"friggstad","2":"jan11"},"editorial_url":"http://discuss.codechef.com/problems/SPLIT","time":{"view_start_date":1294738691,"submit_start_date":1294738691,"visible_start_date":1294738691,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
A submarine sandwich (or a "sub", for short) is a very long and skinny sandwich. The Chef loves to make extremely long subs that he affectionately calls "giant subs". Since a giant sub is so long, the Chef likes to place different sandwich ingredients along different sections of the sub. For instance, the first 20 cm of the sub may have a roast beef filling, the second 20 cm may have tuna, the third 20 cm of the sub might only contain vegetables, and so on. The only restriction on how the ingredients are placed is that each ingredient must appear in an even number of 20 cm segments, for aesthetic reasons.

</p><p>
Now, Jack and Jill are going to have an eating competition. They have ordered one of the Chef's giant subs and will race to see who can eat half of the sub first. To be fair, both Jack and Jill must consume the same number of each ingredient. So, they will cut the sub into small pieces and partition these pieces so that for any sandwich ingredient, both Jack and Jill receive the same number of sections of the sub including this ingredient.

</p><p>
Both Jack and Jill are very anxious to get started with the competition, so they want to do this as fast as possible. Help them cut the sub into smaller parts using the least number of cuts!

<h3>Input</h3>
</p><p>
The input begins with a single line consisting of a single integer k ≤ 30 that indicates the number of test cases to follow. The first line of each test case begins with a single even integer n between 2 and 1000 indicating the number of sections in the giant sub.

</p><p>
The last line of each test case contains n integers between 1 and 500 describe the ingredients used in the sub. The i'th such integer indicates which ingredient is used in the i'th section of the sub. You are guaranteed that each integer/ingredient appears an even number of times.

<h3>Output</h3>
</p><p>
The output for each test case should consist of two lines. The first line indicates the number of cuts that should be made. Say this number is c. Then the second line consists of c integers between 1 and n-1 appearing in strictly increasing order. The i'th such integer, say t<sub>i</sub>, indicates that a cut should be made in the sub to separate section t<sub>i</sub> and t<sub>i</sub>+1 (the first section of the sub has index 1).

</p><p>
These pieces will then be distributed to Jack and Jill in the following manner. Jack will receive all sections from the start of the sub until the cut after section t<sub>1</sub>. Then Jill will receive all sections between the cuts made after section t<sub>1</sub> and t<sub>2</sub>. Then Jack receives the sections between the cuts after sections t<sub>2</sub> and t<sub>3</sub>, etc. Thus, the pieces of the sub are given to Jack and Jill in an alternating fashion. The final piece of the sub (the part after section t<sub>c</sub>) is given to whoever did not receive the section of the sub that ended with section t<sub>c</sub>.

</p><p>
The output should be such that Jack and Jill receive the same number of each ingredient after these cuts are made (note that this is always possible). Your goal should be to do this with as few cuts as possible. This is a scored problem so your output does not have to be optimal, it may contain more cuts than is necessary.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
8
1 2 3 2 3 2 1 2
6
1 1 2 2 3 3
8
500 400 2 400 500 500 2 500

<b>Output:</b>
1
4
3
1 3 5
4
1 3 4 6
</pre>

<h3>Scoring:</h3>
</p><p>
The score for each test case is simply c, the number of cuts made. The score for all test cases in a file is the sum of the scores for the individual test cases in that file. There are multiple files used to test this problem and your overall score is the average of the scores for each file. Your goal should be to make this score as small as possible.

<h3>Test Data:</h3>
</p><p>
Some of the test data is created specifically to make certain heuristics perform poorly. Other test data is generated randomly from varying distributions.</p>