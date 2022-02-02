---
{"category_name":"easy","problem_code":"NOCODING","problem_name":"Code Crazy Minions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gamabunta","problem_tester":null,"date_added":"7-08-2012","tags":{"0":"cook25","1":"gamabunta","2":"greedy"},"time":{"view_start_date":1345403917,"submit_start_date":1345403917,"visible_start_date":1345403917,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">
Coding in Sprout (a programming language) is very intuitive. Chef is giving his minions a demonstration in Sprout and wants you to
help him determine if they are not too difficult for them.
</p>
<p style="text-align:justify">
A program in Sprout is written using three kinds of instructions.
</p>
<p style="text-align:justify"><ul>
	<li>Load Instruction: Load a value into buffer.</li>
	<li>Increment Instruction: Increment the value in buffer.</li>
	<li>Print Instruction: Print the value from buffer.</li>
</ul></p>
<p style="text-align:justify">
The buffer stores a single integer between 0 and 25, both inclusive. If the value in the buffer is x, the increment instruction
makes the value (x+1), if x &lt; 25. At x = 25 the increment instruction makes the value 0.
</p>
<p style="text-align:justify">
Load Instruction can be used to load any value between 0 and 25 (inclusive) into the buffer.
</p>
<p style="text-align:justify">
Print from the buffer prints a lowercase English character based on the value in the buffer. Precisely, it prints the (x+1)th character
in the alphabet. Thus, for x = 0, 'a' is printed; x = 1, 'b' is printed and so on. For x = 25, 'z' is printed.
</p>
<p style="text-align:justify">
To keep his programs clear, he uses the load instruction only once in the beginning (before printing any character). Then
he proceeds instruction after instruction. A program is simple, if the number of instructions is not more than ELEVEN times the length
of the word that it prints.
Given the word Chef wants his program to print and assuming he will write the shortest code (i.e. use the fewest instructions)
to print it, will the program be simple?
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first Line contains a single number T, the number of test cases.
</p>
<p style="text-align:justify">
Each test case contains 1 word on a line by itself - the word that would be printed by Chef's program.
</p>
<h3>Output</h3>
<p style="text-align:justify">
Assuming Chef writes the shortest code (with minimum instructions) to print the given word, output "YES" if this code is not more than
ELEVEN times the length of the word being printed; "NO" otherwise
</p>
<h3>Constraints</h3>
<p style="text-align:justify">
<pre>1 ≤ T ≤ 100
1 ≤ length of word ≤ 1000
</pre>
</p>
<h3>Sample Input</h3>
<p style="text-align:justify">
<pre>2
helloworld
mississippi
</pre>
</p>
<h3>Sample Output</h3>
<p style="text-align:justify">
<pre>NO
YES
</pre>
</p>
<h3>Explanation</h3>
<p style="text-align:justify">
The optimal program length for mississippi is 112 instructions and that is smaller than 121 (length of 'mississippi' * 11)
</p>