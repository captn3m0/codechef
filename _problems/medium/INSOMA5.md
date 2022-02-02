---
{"languages_supported":{"0":"NA"},"title":"INSOMA5","category":"NA","old_version":true,"problem_code":"INSOMA5","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p>The planet of XANDOR was famous in the intergalactic empire for being home to the Carden - a race of super-intelligent computer scientists that were held in high regard for their achievements in the Intergalactic Mind Game Olympiads. The Carden decided to build a huge computer to answer questions related to <em>Life, the Universe and Everything</em>. They decided to use only their best two-input, noise immune, Boolean gates for this device - AND, OR and XOR. After a lot of minimization, they arrived at a variable assignment for their gates. Just then, lightning struck and erased all the parentheses from their expression. Not willing to spend the trouble parenthesizing the huge expression again, they outsourced the work to Earth.</p>
<p>
As a consultant to XANDOR, you need to create a computer program that parenthesizes the Boolean expression in such a manner that the expression results in a true value and report the number of ways possible to do it. In case it is not possible to do so, you need to return 0.
</p>
<h3>Input</h3>
<p>An unparenthesized Boolean expression containing literals T and F which are connected via gates represented as . (dot) for an AND gate, + (plus) for an OR gate and * (star) for an XOR gate. There will be at least one literal in input line. Maximum number of literals i.e. T or F will be 15.</p>
<h3>Output</h3>
<p>Line 1: A single value C >= 0 representing the number of true parenthesizations possible.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
T.F+T*F

<b>Output:</b>
5

</pre><p>
<b>Description</b><br />
The 5 values correspond to the parenthesizations (((T.F)+T)*F), ((T.F)+(T*F)), ((T.(F+T))*F, (T.((F+T)*F)), (T.(F+(T*F))) - all of which evaluate to true.
</p>
    